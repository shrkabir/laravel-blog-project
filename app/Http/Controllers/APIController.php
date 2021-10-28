<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;

class APIController extends Controller
{
    public function allPublishedCategories(){
      $allPublishedCategories=Category::all();
      return $allPublishedCategories;
    }

    public function latestBlog(){
      $latestBlog=Blog::where('publication_status', 1)
            ->orderBy('id', 'DESC')->take(1)->get();

      return $latestBlog;
    }

    public function allPublishedBlogs(){
      $allBlogs=Blog::where('publication_status', 1)->get();

      return $allBlogs;
    }
}
