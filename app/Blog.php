<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    

    public static function saveNewBlogInfo($request){
        $blog=new Blog;

        $blog->category_id            = $request->category_id;
        $blog->blog_title             = $request->blog_title;
        $blog->blog_short_description = $request->blog_short_description;
        $blog->blog_long_description  = $request->blog_long_description;
        $blog->blog_image             = $request->blog_image;
        $blog->publication_status     = $request->publication_status;

        $blog->save();
    }
}
