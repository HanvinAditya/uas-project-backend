<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class AdminController extends Controller
{
    public function view_category()
    {
        $data = Category::all();
        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $category = new Category;

        $category->category_name = $request->category;

        $category->save();

        // After download composer require php-flasher/flasher-toastr-symfony and toastr-laravel
        // The function is to notify if u click the add category button
        toastr()->timeOut(10000)->closeButton()->addSuccess('Category Added Successfully.');

        return redirect()->back();
    }
}
