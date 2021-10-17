<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public static function blogImageUpload($request){
        $blogImage=$request->file('blog_image');
        $blogImageExt=$blogImage->getClientOriginalExtension();
        $setImageName=$request->blog_title.".".$blogImageExt;
        $directory='assets/admin-assets/blog-images/';
        $imageUrl=$directory.$setImageName;
        $blogImage->move($directory, $setImageName);
        return $imageUrl;
    }

    public static function saveNewBlogInfo($request){
        $blog=new Blog;
        $blogImageUrl= Blog::blogImageUpload($request);
        $blog->category_id            = $request->category_id;
        $blog->blog_title             = $request->blog_title;
        $blog->blog_short_description = $request->blog_short_description;
        $blog->blog_long_description  = $request->blog_long_description;
        $blog->blog_image             = $blogImageUrl;
        $blog->publication_status     = $request->publication_status;

        $blog->save();
    }
}
