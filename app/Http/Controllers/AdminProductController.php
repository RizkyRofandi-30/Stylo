<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Product;
use App\Models\Quantity;
use App\Enums\PacketStatus;
use App\Models\PaymentItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    public function addProduct(Request $request)
    {
        try {
            $validate = [
                'product_img' => 'required|image|mimes:jpeg,png,jpg,svg|max:5120',
                'product_name' => 'required|string',
                'product_price' => 'required|numeric|min:100',
                'product_desc' => 'required|string',
                'category' => 'required|string',
            ];

            $message_validate = [
                'product_img.image' => 'File harus berupa gambar',
                'product_img.mimes' => 'Format gambar harus jpeg, png, jpg, atau svg',
                'product_img.max' => 'Ukuran gambar maksimal 5MB',
                'product_img.required' => 'Gambar Wajib Diisi',
                'product_name.required' => 'Nama Produk Wajib Diisi',
                'product_price.required' => 'Harga Produk Wajib Diisi',
                'product_price.numeric' => 'Harga harus berupa angka',
                'product_price.min' => 'Harga Produk Minimal 100',
                'product_desc.required' => 'Deskripsi Produk Wajib Diisi',
                'category.required' => 'Kategori Produk Wajib Diisi',
            ];

            $validatedData = $request->validate($validate, $message_validate);
            $product_data = [
                'product_name' => $validatedData['product_name'],
                'product_price' => $validatedData['product_price'],
                'product_desc' => $validatedData['product_desc'],
                'category' => $validatedData['category'],
            ];


            if ($request->hasFile('product_img')) {
                $img_path = $request->file('product_img')->store('product', 'public');
                $product_data['product_img'] = $img_path;
            }

            Product::create($product_data);

            // Logic for Accessories and Kids
            if (in_array($validatedData['category'], ['Accessories', 'Kid'])) {
                $dataValidate = [
                    'quantity' => 'required|numeric|min:1',
                ];

                $dataMessages = [
                    'quantity.required' => 'Jumlah Wajib Diisi',
                    'quantity.numeric' => 'Jumlah harus berupa angka',
                    'quantity.min' => 'Jumlah Minimal 1',
                ];

                $data = $request->validate($dataValidate, $dataMessages);

                $product = Product::latest()->first();
                Quantity::create([
                    'product_id' => $product->product_id,
                    'size' => null,
                    'quantity' => $data['quantity'],
                ]);
            }

            // Logic for Men, Women
            if (in_array($validatedData['category'], ['Men', 'Women'])) {
                $fashionValidate = [
                    'sizes' => 'required|array|min:1',
                    'sizes.*.size' => 'required|string|in:XS,S,M,L,XL,XXL',
                    'sizes.*.quantity' => 'required|numeric|min:1',
                ];

                $fashionMessages = [
                    'sizes.required' => 'Setidaknya satu ukuran harus ditambahkan.',
                    'sizes.*.size.required' => 'Ukuran wajib diisi.',
                    'sizes.*.size.in' => 'Ukuran harus salah satu dari XS, S, M, L, XL, XXL.',
                    'sizes.*.quantity.required' => 'Jumlah wajib diisi.',
                    'sizes.*.quantity.numeric' => 'Jumlah harus berupa angka.',
                    'sizes.*.quantity.min' => 'Jumlah minimal adalah 1.',
                ];

                $fashionData = $request->validate($fashionValidate, $fashionMessages);

                $product = Product::latest()->first();

                foreach ($fashionData['sizes'] as $entry) {
                    Quantity::create([
                        'product_id' => $product->product_id,
                        'size' => $entry['size'],
                        'quantity' => $entry['quantity'],
                    ]);
                }
            }
            return redirect()->back()->with('success', 'Produk Berhasil Ditambahkan');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->with('isProductInfoModal', true)
                ->withErrors($e->validator)  // This sends the actual validation errors dynamically
                ->withInput();
        }
    }

    public function showProduct()
    {
        $products = Product::paginate(5);
        $totalProducts = Product::count();

        $totalItem = PaymentItem::select('product_id', 'size')
            ->distinct()
            ->count();

        $revenue = Payment::sum('total_price');

        return view('admin.dashboard', compact('products', 'totalProducts', 'totalItem', 'revenue'));
    }


    public function getEditProduct($id){
        $products = Product::where('product_id', $id)->get();
        return view('admin.edit', compact('products'));
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        Storage::disk('public')->delete($product->product_img);
        if ($product) {
            $product->delete();
            return redirect()->back()->with('success', 'Produk Berhasil Dihapus');
        } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan');
        }
    }
    
    public function editProduct(Request $request, $id)
    {
        try {
            $product = Product::find($id);
            $validate = [
                'product_img' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:5120',
                'product_name' => 'nullable|string',
                'product_price' => 'nullable|numeric|min:100',
                'product_desc' => 'nullable|string',
                'category' => 'nullable|string',
            ];

            $message_validate = [
                'product_img.image' => 'File harus berupa gambar',
                'product_img.mimes' => 'Format gambar harus jpeg, png, jpg, atau svg',
                'product_img.max' => 'Ukuran gambar maksimal 5MB',
            ];

            $validatedData = $request->validate($validate, $message_validate);

            $product_data = [
                'product_name' => $validatedData['product_name'] ?? $product->product_name,
                'product_price' => $validatedData['product_price'] ?? $product->product_price,
                'product_desc' => $validatedData['product_desc'] ?? $product->product_desc,
                'category' => $validatedData['category'] ?? $product->category,
            ];

            if ($request->hasFile('product_img')) {
                $img_path = $request->file('product_img')->store('product', 'public');
                $product_data['product_img'] = $img_path;
                Storage::disk('public')->delete($product->product_img);
            }

            // Update the product
            $product->update($product_data);

            if (in_array($validatedData['category'], ['Men', 'Women'])) {
                $fashionValidate = [
                    'sizes' => 'required|array|min:1',
                    'sizes.*.size' => 'required|string|in:XS,S,M,L,XL,XXL',
                    'sizes.*.quantity' => 'required|numeric|min:1',
                ];

                $fashionMessages = [
                    'sizes.required' => 'Setidaknya satu ukuran harus ditambahkan.',
                    'sizes.*.size.required' => 'Ukuran wajib diisi.',
                    'sizes.*.size.in' => 'Ukuran harus salah satu dari XS, S, M, L, XL, XXL.',
                    'sizes.*.quantity.required' => 'Jumlah wajib diisi.',
                    'sizes.*.quantity.numeric' => 'Jumlah harus berupa angka.',
                    'sizes.*.quantity.min' => 'Jumlah minimal adalah 1.',
                ];

                $fashionData = $request->validate($fashionValidate, $fashionMessages);

                foreach ($fashionData['sizes'] as $entry) {
                    Quantity::updateOrCreate(
                        [
                            'product_id' => $product->product_id,
                            'size' => $entry['size'],
                        ],
                        [
                            'quantity' => $entry['quantity'],
                        ]
                    );
                }

                if ($request->has('removed_size_ids')) {
                    $idsToRemove = array_filter(explode(',', $request->input('removed_size_ids')), fn($id) => is_numeric($id) && $id !== '');
                    if (!empty($idsToRemove)) {
                        Quantity::whereIn('id', $idsToRemove)->delete();
                    }
                }
                
            }

            return redirect()->route('admin')->with('success', 'Produk Berhasil Diperbarui');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->with('isProductInfoModal', true)
                ->withErrors($e->validator)  // This sends the actual validation errors dynamically
                ->withInput();
        }
    }

    public function showPacket() {
        $packets = PaymentItem::with('payment') // eager load related payment
            ->paginate(5);
    
        $no = ($packets->currentPage() - 1) * $packets->perPage() + 1;
    
        return view('admin.packet', compact('packets', 'no'));
    }

    public function deletePacketItem($product_id)
    {
        $product = PaymentItem::findOrFail($product_id); // sesuaikan modelnya
        $product->delete();

        return redirect()->back()->with('success', 'Packet berhasil dihapus');
    }

    public function updatePacketStatus(Request $request, $id)
    {
        // Validate the status input
        $validated = $request->validate([
            'PacketStatus' => ['required', 'in:' . implode(',', array_column(PacketStatus::cases(), 'value'))],
        ]);

        // Find the packet and update status
        $packet = PaymentItem::findOrFail($id);
        $packet->packet_status = $validated['PacketStatus'];
        $packet->save();

        return redirect()->back()->with('success', 'Status paket berhasil diperbarui.');
    }

    
}
