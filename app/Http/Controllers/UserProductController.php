<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use App\Models\Product;
use App\Models\CartItem;
use App\Models\Quantity;
use App\Models\PaymentItem;
use Illuminate\Http\Request;

class UserProductController extends PaymentController
{
    protected string $checkout_array;
    public function listProduct(){
        $products = Product::paginate(8);
        return view('user.list-product', compact('products'));
    }

    public function listProductByCategory($category) {
        $products = Product::where('category', $category)->paginate(8);
        return view('user.list-product', compact('products'));
    }

    public function singleProduct($id){
        $products = Product::where('product_id', $id)->get();
        return view('user.single-product', compact('products'));
    }

    public function showCart($user_id){
        $carts = Cart::where('user_id', $user_id)
            ->with('items.product')
            ->first();

        $totalPrice = $carts->items->reduce(function ($total, $item) {
                return $total + ($item->quantity * $item->product->product_price);
            }, 0);
        return view('user.cart', compact('carts','totalPrice'));
    }

    public function addToCart(Request $request, $user_id)
    {
        $product_id = $request->input('product_id');
        $product = Product::findOrFail($product_id);
        $category = strtolower($product->category);
        $cart = Cart::firstOrCreate(['user_id' => $user_id]);

        $validateCart = [
            'quantity' => 'required|numeric|min:1',
            'size' => 'nullable'
        ];
        $validatedData = $request->validate($validateCart);

        
        // Check if this product already exists in the user's cart items
        $existingCartItem = CartItem::where('cart_id', $cart->cart_id)
                            ->where('product_id', $product_id)
                            ->when(isset($validatedData['size']), function($query) use ($validatedData) {
                                return $query->where('size', $validatedData['size']);
                            })
                            ->first();

        if ($existingCartItem) {
            // Update quantity if item exists
            $existingCartItem->quantity += $validatedData['quantity'];
            $existingCartItem->save();
        }else{
            if (in_array($category, ['men', 'women'])) {
                CartItem::create([
                    'cart_id' => $cart->cart_id,
                    'product_id' => $product_id,
                    'quantity' => $validatedData['quantity'],
                    'size' => $validatedData['size'],
                ]);
            }
    
            if (in_array($category, ['kid','accessories'])) {
                CartItem::create([
                    'cart_id' => $cart->cart_id,
                    'product_id' => $product_id,
                    'quantity' => $validatedData['quantity'],
                    'size' => null
                ]);
            }
        }

        return redirect()->route('user.show_cart', ['user_id' => $user_id])->with('success', 'Produk Berhasil Ditambahkan!');
    }

    public function deleteItemCart(Request $request, $user_id, $product_id)
    {
        $cart = Cart::where('user_id', $user_id)->first();
        if (!$cart) {
            return redirect()->back()->with('error', 'Cart not found.');
        }

        // If size is included in the request (for products with size)
        $size = $request->input('size');

        $cartItemQuery = CartItem::where('cart_id', $cart->cart_id)
                        ->where('product_id', $product_id);

        if ($size !== null) {
            $cartItemQuery->where('size', $size);
        }

        $cartItem = $cartItemQuery->first();

        if ($cartItem) {
            $cartItem->delete();
            return redirect()->route('user.show_cart', ['user_id' => $user_id])->with('success', 'Produk Telah Di Hapus');
        }

        return redirect()->back()->with('error', 'Item not found in cart.');
    }

    public function postCheckout(Request $request, $user_id)
    {
        $product_id = $request->input('product_id');

        $validateCheckout = [
            'quantity' => 'required|numeric|min:1',
            'size' => 'nullable'
        ];
        $validatedData = $request->validate($validateCheckout);

        $checkoutArray = session()->get('checkout_array', []);

        $found = false;

        foreach ($checkoutArray as &$item) {
            if (
                $item['product_id'] == $product_id &&
                ($item['size'] ?? null) == ($validatedData['size'] ?? null)
            ) {
                // Get total requested quantity (existing + new)
                $totalQuantity = $item['quantity'] + $validatedData['quantity'];

                // Check available quantity
                $availableQuantity = Quantity::where('product_id', $product_id)
                    ->when(isset($validatedData['size']), function ($query) use ($validatedData) {
                        return $query->where('size', $validatedData['size']);
                    })
                    ->value('quantity');

                if ($totalQuantity > $availableQuantity) {
                    // return redirect()->back()->withErrors(['quantity' => 'Stok tidak mencukupi']);
                    return redirect()->route('user.single_product', ['id' => $product_id])->with('error', 'Stok tidak mencukupi');
                }

                $item['quantity'] = $totalQuantity;
                $found = true;
                break;
            }
        }

        if (!$found) {
            // Check if requested quantity is available before adding new item
            $availableQuantity = Quantity::where('product_id', $product_id)
                ->when(isset($validatedData['size']), function ($query) use ($validatedData) {
                    return $query->where('size', $validatedData['size']);
                })
                ->value('quantity');

            if ($validatedData['quantity'] > $availableQuantity) {
                return redirect()->route('user.single_product', ['id' => $product_id])->with('error', 'Stok tidak mencukupi');
            }

            $checkoutArray[] = [
                'user_id' => $user_id,
                'product_id' => $product_id,
                'quantity' => $validatedData['quantity'],
                'size' => $validatedData['size'] ?? null,
            ];
        }

        session(['checkout_array' => $checkoutArray]);

        return redirect()->route('user.get_checkout', ['user_id' => $user_id]);
    }
   
    

    public function getCheckout($user_id) {
        $checkoutArray = session()->get('checkout_array', []);  
        $checkoutItems = collect($checkoutArray)->map(function ($item) {
            $product = Product::find($item['product_id']);
            return [
                'product' => $product, // Contains name, image, price, etc.
                'quantity' => $item['quantity'],
                'size' => $item['size'],
            ];
        });

        $totalPrice = $checkoutItems->reduce(function ($total, $item) {
            return $total + ($item['quantity'] * $item['product']->product_price);
        }, 0);
        
        $paymentToken = $this->getPayment($user_id, $checkoutItems, $totalPrice);
        
        return view('user.checkout', [
            'user_id' => $user_id,
            'checkoutItems' => $checkoutItems,
            'totalPrice' => $totalPrice,
            'paymentToken' => $paymentToken
        ]);
    }

    public function postCheckoutCart(Request $request, $user_id, $cart_id)
    {
        $cart = Cart::where('user_id', $user_id)->findOrFail($cart_id);

        $validated = $request->validate([
            'quantity' => 'required|numeric|min:1',
            'product_id' => 'required|exists:products,product_id',
            'size' => 'nullable|string',
        ]);

        $product_id = $validated['product_id'];
        $size = $validated['size'] ?? null;
        $quantity = $validated['quantity'];

        $product = Product::findOrFail($product_id);
        $category = strtolower($product->category);
        $sizeRequired = in_array($category, ['men', 'women']);

        $query = CartItem::where('cart_id', $cart->cart_id)
            ->where('product_id', $product_id);

        if ($sizeRequired) {
            $query->where('size', $size);
        } else {
            $query->whereNull('size');
            $size = null;
        }

        $existingCartItem = $query->first();

        if ($existingCartItem) {
            $existingCartItem->quantity = $quantity;
            $existingCartItem->save();
        } else {
            CartItem::create([
                'cart_id' => $cart->cart_id,
                'product_id' => $product_id,
                'quantity' => $quantity,
                'size' => $size,
            ]);
        }

        $cartItems = CartItem::where('cart_id', $cart->cart_id)->get();
        $checkoutArray = $cartItems->map(function ($item) {
            return [
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'size' => $item->size,
                'cart_id' => $item->id,
            ];
        })->toArray();

        session()->put('checkout_array', $checkoutArray);

        return redirect()->route('user.get_checkout_cart', ['user_id' => $user_id, 'cart_id' => $cart_id]);
    }


    public function getCheckoutCart($user_id, $cart_id) 
    {
        $cart = Cart::where('user_id', $user_id)->findOrFail($cart_id);

        $cartItems = CartItem::with('product')
            ->where('cart_id', $cart->cart_id)
            ->get();

        $checkoutArray = $cartItems->map(function ($item) {
            return [
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'size' => $item->size,
                'cart_id' => $item->id,
            ];
        })->toArray();

        // ✅ Update session
        session()->put('checkout_array', $checkoutArray);

        $checkoutItems = $cartItems->map(function ($item) {
            return [
                'product' => $item->product,
                'quantity' => $item->quantity,
                'size' => $item->size,
            ];
        });

        $totalPrice = $checkoutItems->reduce(function ($total, $item) {
            return $total + ($item['quantity'] * $item['product']->product_price);
        }, 0);

        $paymentToken = $this->getPayment($user_id, $checkoutItems, $totalPrice);

        return view('user.checkout', [
            'user_id' => $user_id,
            'checkoutItems' => $checkoutItems,
            'totalPrice' => $totalPrice,
            'paymentToken' => $paymentToken,
        ]);
    }
    
    public function orderProgress($user_id){
        $orders = Payment::where('user_id', $user_id)
            ->orderBy('created_at', 'desc')
            ->get();
        $statusColors = [
            'Menunggu_Konfirmasi' => 'bg-blue-200 text-blue-800',
            'Sedang_Diproses' => 'bg-yellow-200 text-yellow-800',
            'Di_Perjalanan' => 'bg-gray-200 text-gray-800',
            'Di_Batalkan' => 'bg-red-200 text-red-800',
            'Paket_Sampai' => 'bg-green-200 text-green-800'
        ];

        foreach ($orders as $order) {
            foreach ($order->paymentItems as $item) {
                $item->color_class = $statusColors[$item->packet_status] ?? 'bg-gray-100 text-gray-800';
            }
        }
        
        return view('user.order-progress', compact('orders'));
    }
}
