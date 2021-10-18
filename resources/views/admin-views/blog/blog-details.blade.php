@extends('admin-views.master');

@section('content-body')
    <h3 class="text-center text-success">Blog Details</h3>
    <div>
        <table class="table table-striped">
            <tr>
                <th>Blog Title</th>
                <td>{{$blog->blog_title}}</td>
            </tr>
            <tr>
                <th>Blog Image</th>
                <td><img src="{{asset('/')}}/{{$blog->blog_image}}" width="300px" height="200px"/></td>
            </tr>
            <tr>
                <th>Blog Short Description</th>
                <td>{{$blog->blog_short_description}}</td>
            </tr>
            <tr>
                <th>Blog Long Description</th>
                <td>{{$blog->blog_long_description}}</td>
            </tr>
            
            <tr>
                <th>Publication Status</th>
                <td>{{$blog->publication_status==1 ? 'Published': 'Unpublished'}}</td>
            </tr>
        </table>
    </div>
@endsection