<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
        {
            return view('categories.index')->with(['posts' => $category->getByCategory()]);
        }
}