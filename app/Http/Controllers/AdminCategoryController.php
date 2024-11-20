<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminCategoryController extends Controller
{
    //

    public function categories()
    {
        $categories = category::all();
        return view("admin views.category.categories", compact('categories'));
    }

    public function addCategory()
    {
        $category = new Category();
        $data = compact('category');
        return view('admin views.category.addCategory')->with($data);
    }

    public function createCategory(Request $request)
    {

        $category = new Category();
        $category->categoryName = $request['categoryName'];
        $category->categoryPageSubHeading = $request['categoryPageSubHeading'];
        $category->categoryPageMainHeading = $request['categoryPageMainHeading'];
        $category->categoryDescription = $request['categoryDescription'];
        $category->isActive = $request['isActive'];

        // Handle file upload for para image
        if ($request->hasFile('categoryParagraphImage')) {
            $image = $request->file('categoryParagraphImage');
            $imagePath = $image->store('categoryParaImages', 'public'); // Store in 'storage/app/public/products'
            $category->categoryPageContentImageUrl = $imagePath;
        }

        
        // Handle file upload for hero image
        if ($request->hasFile('categoryHeroImage')) {
            $image = $request->file('categoryHeroImage');
            $imagePath = $image->store('categoryHeroImage', 'public'); // Store in 'storage/app/public/products'
            $category->categoryPageHeroImage = $imagePath;
        }

        $category->save();
        return redirect('/admin/view-categories')->with('success', 'Category Added Successfully!');
    }

    public function editCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('admin views.category.addCategory')->with(compact('category'));
    }

    public function editCategoryPost(Request $request)
    {
        $category = Category::findOrFail($request['category_id']);
        $category->categoryName = $request['categoryName'];
        $category->categoryPageSubHeading = $request['categoryPageSubHeading'];
        $category->categoryPageMainHeading = $request['categoryPageMainHeading'];
        $category->categoryDescription = $request['categoryDescription'];
        $category->isActive = $request['isActive'];

        // Handle file upload for paragraph image
        if ($request->hasFile('categoryParagraphImage')) {
            // Delete the old image if it exists
            if ($category->categoryPageContentImageUrl) {
                Storage::disk('public')->delete($category->categoryPageContentImageUrl);
            }

            $image = $request->file('categoryParagraphImage');
            $imagePath = $image->store('categoryParaImages', 'public'); // Store in 'storage/app/public/products'
            $category->categoryPageContentImageUrl = $imagePath;
        }

        // Handle file upload for hero image
        if ($request->hasFile('categoryHeroImage')) {
            // Delete the old image if it exists
            if ($category->categoryPageHeroImage) {
                Storage::disk('public')->delete($category->categoryPageHeroImage);
            }

            $image = $request->file('categoryHeroImage');
            $imagePath = $image->store('categoryHeroImage', 'public'); // Store in 'storage/app/public/products'
            $category->categoryPageHeroImage = $imagePath;
        }

        $category->save();
        return redirect('/admin/view-categories')->with('success', 'Category Updated Successfully!');
    }
}
