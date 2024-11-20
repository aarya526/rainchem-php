<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        $categories = category::paginate(4);
        return view('index', compact('categories'));
    }

    public function loadMoreCategories(Request $request)
    {
        $skip = $request->input('skip'); // Tracks how many categories to skip
        $categories = category::skip($skip)->take(8)->get(); // Load 8 more categories
        return response()->json($categories);
    }

    public function viewCategoryPages($categoryName, $id)
    {
        $c = Category::findOrFail($id);
        $products = Product::where('category_id', $id)->where('activeStatus', 1)->get();
        $data = compact('c', 'products');
        return view('categoryViewPage')->with($data);
    }

    public function viewSingleProductDetails($id)
    {
        $singleProduct = Product::with('category')->findOrFail($id);
        $products = Product::with('category')->where('activeStatus', 1)->get();
        $data = compact('singleProduct', 'products');
        return view('singleProductDetails')->with($data);
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function blog()
    {
        return view('blog');
    }

    public function careers()
    {
        return view('careers');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function privacyPolicy()
    {
        return view('privacyPolicy');
    }

    public function terms()
    {
        return view('terms');
    }

    public function vendorRegistration()
    {
        return view('vendorRegistration');
    }
}
