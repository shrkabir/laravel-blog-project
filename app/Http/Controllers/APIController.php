<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class APIController extends Controller
{
    public function latestBlog(){
      $latestBlog=Blog::where('publication_status', 1)
            ->orderBy('id', 'DESC')->take(1)->get();

      return $latestBlog;
    }
}
