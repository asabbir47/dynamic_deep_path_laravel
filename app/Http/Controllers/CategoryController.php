<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function index()
    {

        $categories = Category::where('parent_id', '=', null)->with('children')->get();

        return view('myBlade', compact('categories'));
    }

    public function parent($slug)
    {
        dump($slug);
        $category = Category::where('slug', $slug)->with('children')->first();
        dump($category);
        // return view('myBlade', compact('category')); //make blade anyware you wish.

    }
}
