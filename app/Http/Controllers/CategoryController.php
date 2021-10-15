<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin-views.category.add-category');
    }

    public function saveNewCategory(){
        Category::saveCategoryInfo(Request $request);
    }
}
