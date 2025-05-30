<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Quantity;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $checkout = []; 
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
            if (in_array($validatedData['category'], ['Accesories', 'Kid'])) {
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
        return view('admin.dashboard', compact('products', 'totalProducts'));
    }

    public function listProduct(){
        $products = Product::paginate(8);
        return view('user.list-product', compact('products'));
    }

    public function listProductByCategory($category) {
        $products = Product::where('category', $category)->paginate(8);
        return view('user.list-product', compact('products'));
    }

    public function singleProduct($id)
    {
        $products = Product::where('product_id', $id)->get();
        return view('user.single-product', compact('products'));
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
    
    function editProduct(Request $request, $id)
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

    public function checkout() {
        // 
    }

}
