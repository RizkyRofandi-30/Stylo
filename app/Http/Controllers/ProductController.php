<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addProduct(Request $request){
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
        
            return redirect()->back()->with('success', 'Produk Berhasil Ditambahkan');
        } catch (\Illuminate\Validation\ValidationException $e) {
            return redirect()->back()
                ->with('isProductInfoModal', true)
                ->withErrors($e->validator)  // This sends the actual validation errors dynamically
                ->withInput(); 
        }
    }
    
    public function showProduct(){
        $products = Product::all();
        return view('admin.dashboard', compact('products'));
    }

    public function deleteProduct($id){
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return redirect()->back()->with('success', 'Produk Berhasil Dihapus');
        } else {
            return redirect()->back()->with('error', 'Produk tidak ditemukan');
        }
    }
}
