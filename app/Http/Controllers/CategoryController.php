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
      $this->validate($request, [
        'category_name'        => 'required',
        'category_description' => 'required',
        'publication_status'   => 'required'
      ]);
        Category::saveCategoryInfo($request);

        return redirect('/category/add')->with('message', 'New category added successfully');
    }

    public function manageCategoryView(){
        $categories=Category::all();
        return view('admin-views.category.manage-category', [
            'categories' =>$categories
        ]);
    }

    public function unpublishCategory($category_id){
        $category=Category::find($category_id);
        $category->publication_status=0;
        $category->save();

        return redirect('/category/manage')->with('message', 'Category unpublished successfully.');
    }

    public function publishCategory($category_id){
        $category=Category::find($category_id);
        $category->publication_status=1;
        $category->save();

        return redirect('/category/manage')->with('message', 'Category published successfully.');
    }

    public function editCategoryView($category_id){
        $category=Category::find($category_id);
        return view('admin-views.category.edit-category', [
            'category' =>$category
        ]);
    }

    public function updateCategory($category_id, Request $request){
        $this->validate($request, [
          'category_name'        => 'required',
          'category_description' => 'required',
          'publication_status'   => 'required'
        ]);
        
        Category::saveUpdatedCategoryInfo($category_id, $request);

        return redirect('/category/manage')->with('message', 'Category edited successfully.');
    }

    public function deleteCategory($category_id){
        $category=Category::find($category_id);

        $category->delete();

        return redirect('/category/manage')->with('message', 'Category deleted successfully.');
    }
}
