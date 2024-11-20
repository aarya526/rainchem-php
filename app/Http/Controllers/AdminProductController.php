<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    //

    public function viewProducts()
    {
        $products = Product::all();
        $data = compact('products');
        return view('admin views.product.viewProducts', $data);
    }


    public function addProduct()
    {
        $product = new Product();
        $categories = category::all();
        $data = compact('categories', 'product');
        return view('admin views.product.addProduct', $data);
    }

    public function createProduct(Request $request)
    {
        $product = new Product();
        $product->product_name = $request['product_name'];
        $product->listPrice = $request['listPrice'];
        $product->ourPrice = $request['ourPrice'];
        $product->description = $request['description'];
        $product->activeStatus = $request['activeStatus'];
        $product->category_id = $request['category_id'];
        $product->stock = $request['stock'];
        $product->sku = $request['sku'];

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = $image->store('products', 'public'); // Store in 'storage/app/public/products'
            $product->imgUrl = $imagePath;
        }

        $product->save();
        return redirect('/admin/view-products')->with('success', 'Product Added Successfully!');
    }


    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $data = compact('product', 'categories');
        return view('admin views.product.addProduct', $data);
    }

    public function editProductPost(Request $request)
    {
        $product = Product::findOrFail($request['product_id']);
        $product->product_name = $request['product_name'];
        $product->category_id = $request['category_id'];
        $product->listPrice = $request['listPrice'];
        $product->ourPrice = $request['ourPrice'];
        $product->sku = $request['sku'];
        $product->stock = $request['stock'];
        $product->description = $request['description'];
        $product->activeStatus = $request['activeStatus'];

        // Handle file upload if a new image is uploaded
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($product->imgUrl) {
                Storage::disk('public')->delete($product->imgUrl);
            }

            $image = $request->file('image');
            $imagePath = $image->store('products', 'public'); // Store in 'storage/app/public/products'
            $product->imgUrl = $imagePath;
        }
        $product->save();
        return redirect('/admin/view-products')->with('success', 'Product Updated Successfully!');
    }
}
