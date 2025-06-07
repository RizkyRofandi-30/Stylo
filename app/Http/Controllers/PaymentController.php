<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Payment;
use App\Models\PaymentItem;
use App\Models\User;
use App\Models\Product;
use App\Models\Quantity;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as ParentController;

class PaymentController extends ParentController
{
    public function getPayment($user_id, $checkoutItems, $totalPrice){
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server--8lA0_BVhaMDBX__epjLe_C8';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $userData = User::find($user_id);
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $totalPrice,
            ),
            'item_details' => $checkoutItems->map(function ($item) {
                    return [
                        'id' => $item['product']->product_id,
                        'price' => $item['product']->product_price,
                        'quantity' => $item['quantity'],
                        'name' => substr($item['product']->product_name . ' - Size: ' . $item['size'], 0, 50),
                    ];
                })->toArray(),
            'customer_details' => array(
                'name' => $userData->name,
                'email' => $userData->email,
                'phone' => $userData->phone,
                'address' => $userData->address,
            )
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return $snapToken;
    }

    public function postPayment(Request $request, $user_id) {
        $validated = $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|string'
        ]);
    
        $checkoutArray = session()->get('checkout_array', []);  
        $checkoutItems = collect($checkoutArray)->map(function ($item) {
            $product = Product::find($item['product_id']);
            return [
                'product' => $product,
                'quantity' => $item['quantity'],
                'size' => $item['size'],
            ];
        });
    
        $totalPrice = $checkoutItems->reduce(function ($total, $item) {
            return $total + ($item['quantity'] * $item['product']->product_price);
        }, 0);
    
        $payment = Payment::create([
            'user_id' => $user_id,
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'postal_code' => $validated['postal_code'],
            'total_price' => $totalPrice,
        ]);
    
        foreach ($checkoutItems as $item) {
            PaymentItem::create([
                'payment_id' => $payment->payment_id,
                'product_id' => $item['product']->product_id,
                'product_img' => $item['product']->product_img,
                'product_name' => $item['product']->product_name,
                'size' => $item['size'],
                'quantity' => $item['quantity'],
                'price_item' => $item['product']->product_price,
            ]);

            $quantities = Quantity::where('product_id',$item['product']->product_id )
                            ->where('size',$item['size'])
                            ->when(isset($item['size']), function($query) use ($item) {
                                return $query->where('size', $item['size']);
                            })
                            ->first();;

            if ($quantities) {
                // Update quantity if item exists
                $quantities->quantity -= $item['quantity'];
                $quantities->save();
            }
        }
    
        // Optional: clear session after order placed
        session()->forget('checkout_array');
        
        return view('user.payment_success');
    }
    

    public function testPayment() {
        /*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
        composer require midtrans/midtrans-php
                                    
        Alternatively, if you are not using **Composer**, you can download midtrans-php library 
        (https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
        the file manually.   

        require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

        //SAMPLE REQUEST START HERE

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server--8lA0_BVhaMDBX__epjLe_C8';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            ),
            'customer_details' => array(
                'first_name' => 'budi',
                'last_name' => 'pratama',
                'email' => 'budi.pra@example.com',
                'phone' => '08111222333',
            ),
            'callbacks' => [
                'finish' => route('payment.finish'),
                'error' => route('payment.error'),
            ],
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('user.vardump', ['snap_token' => $snapToken]);
    }

    public function dataCheckout(Request $request, $user_id)
    {
        $validated = $request->validate([
            'product_id' => 'require|numeric',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'postal_code' => 'required|string',
            'items' => 'required|array',
            'total_price' => 'required|numeric',
        ]);
    
        $checkoutData = [
            'user_id' => $user_id,
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'address' => $validated['address'],
            'postal_code' => $validated['postal_code'],
            'items' => [],
            'total_price' => $validated['total_price'],
        ];
    
        foreach ($validated['items'] as $item) {
            $checkoutData['items'][] = [
                'product_id' => $item['product_id'],
                'size' => $item['size'],
                'quantity' => $item['quantity'],
                'subtotal' => $item['price'] * $item['quantity'],
            ];
        }
        return $checkoutData;
    }

    public function paymentSuccess() {
        return view('user.payment_success');
    }
    
    public function paymentPending() {
        return view('user.payment_pending');
    }
    
    public function paymentError() {
        return view('user.payment_error');
    }

}
