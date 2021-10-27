<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use DB;

class BlogController extends Controller
{
    public function index(){
        $categories=Category::where('publication_status', 1)->get();

        return view('admin-views.blog.add-blog', [
            'categories' => $categories
        ]);
    }

    public function saveNewBlog(Request $request){
        $this->validate($request, [
          'category_id'            => 'required',
          'blog_title'             => 'required',
          'blog_short_description' => 'required',
          'blog_long_description'  => 'required',
          'blog_image'             => 'required',
          'publication_status'     => 'required'
        ]);

        Blog::saveNewBlogInfo($request);

        return redirect('/blog/add')->with('message', 'New blog added successfully.');
    }

    public function showManageBlogView(){
        $blogs=DB::table('blogs')
                    ->join('categories', 'blogs.category_id', '=', 'categories.id')
                    ->select('blogs.*', 'categories.category_name')
                    ->get();
        return view('admin-views.blog.manage-blog', [
            'blogs' => $blogs
        ]);
    }

    public function unpublishBlog($blog_id){
        $blog=Blog::find($blog_id);
        $blog->publication_status=0;
        $blog->save();

        return redirect('/blog/manage')->with('message', 'Blog unpublished successfully.');
    }

    public function publishBlog($blog_id){
        $blog=Blog::find($blog_id);
        $blog->publication_status=1;
        $blog->save();

        return redirect('/blog/manage')->with('message', 'Blog published successfully.');
    }

    public function showBlogDetails($blog_id){
        $blog=Blog::find($blog_id);

        return view('admin-views.blog.blog-details', [
            'blog' =>$blog
        ]);
    }

    public function showEditBlogPage($blog_id){
        $blog=Blog::find($blog_id);
        $categories=Category::where('publication_status', 1)->get();

        return view('admin-views.blog.edit-blog', [
            'blog' =>$blog,
            'categories' =>$categories
        ]);
    }

    public function updateBlog($blog_id, Request $request){
      $this->validate($request, [
        'category_id'            => 'required',
        'blog_title'             => 'required',
        'blog_short_description' => 'required',
        'blog_long_description'  => 'required',
        'blog_image'             => 'required',
        'publication_status'     => 'required'
      ]);

        Blog::saveUpdatedBlogInfo($blog_id, $request);

        return redirect('/blog/manage')->with('message', 'Blog edited successfully.');
    }

    public function deleteBlog($blog_id){
        $blog=Blog::find($blog_id);
        $blog->delete();

        return redirect('/blog/manage')->with('message', 'Blog deleted successfully.');
    }
}
