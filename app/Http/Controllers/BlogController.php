<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;

class BlogController extends Controller
{
    public function index(){
        $categories=Category::where('publication_status', 1)->get();

        return view('admin-views.blog.add-blog', [
            'categories' => $categories
        ]);
    }

    public function saveNewBlog(Request $request){
        Blog::saveNewBlogInfo($request);

        return redirect('/blog/add')->with('message', 'New blog added successfully.');
    }

    public function showManageBlogView(){
        return view('admin-views.blog.manage-blog');
    }
}
