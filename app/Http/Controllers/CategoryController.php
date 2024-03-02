<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategories()
    {
        $categories = Category::latest()->get();
        return view("admin.category.index", compact("categories"));
    }

    public function AddCategory()
    {
        return view("admin.category.create");
    }

    public function EditCategory(Category $category)
    {
        return view("admin.category.update", ['category' => $category]);
    }


    //End-points

    public function StoreCategory(CategoryRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->hasFile('category_img')) {
            $image = $request->file('category_img');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)->resize(370, 246)->save('upload/category/' . $name_gen);
            $save_url = 'upload/category/' . $name_gen;
        }
        Category::create([
            'category_name' => $validatedData['category_name'], // Ensure that category_name is provided
            'category_img' => $save_url ?? null, // Make category_img optional
        ]);
        return redirect()->back()->with('success', 'Category saved successfully!');
    }

    public function UpdateCategory(CategoryRequest $request, Category $category)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('category_img')) {
            //if update includes updating the image
            $image = $request->file('category_img');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::read($image)->resize(370, 246)->save('upload/category/' . $name_gen);
            $save_url = 'upload/category/' . $name_gen;

            $category->update([
                'category_name' => $validatedData['category_name'], // Ensure that category_name is provided
                'category_img' => $save_url, // Make category_img optional
            ]);
        } else {
            //if update does not include updating the image
            $category->update([
                'category_name' => $validatedData['category_name'], // Ensure that category_name is provided
            ]);
        }
        return redirect()->route('admin.categories.edit', ['category' => $category])->with('success', 'Category updated successfully!');
    }

    public function DeleteCategory(Category $category)
    {
        if (isset($category->category_img)) {
            $img = $category->category_img;
            unlink($img);
        }
        $category->delete();
        return redirect()->route('admin.categories')->with('success', 'Category deleted successfully!');
    }
}
