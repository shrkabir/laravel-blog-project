<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
        return view('admin-views.category.add-category');
    }

    public function saveNewCategory(Request $request){
        Category::saveCategoryInfo($request);

        return redirect('/category/add')->with('message', 'New category added successfully');
    }

    public function manageCategoryView(){
        $categories=Category::all();
        return view('admin-views.category.manage-category', [
            'categories' =>$categories
        ]);
    }
}
