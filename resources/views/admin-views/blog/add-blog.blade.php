@extends('admin-views.master')

@section('content-body')
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="text-center text-success">Add Blog Form</h4>
        </div>
        <div class="panel-body">
          <h4 class="text-center text-success">{{ Session::get('message')}}</h4>

          <form action="{{route('save-new-blog')}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-md-3">Category Name</label>
              <div class="col-md-9">
                <select class='form-control' name='category_id'>
                  <option>----Select Category----</option>
                  @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->category_name}}</option>
                  @endforeach
                </select>
              </div>
              <h4 style="color: red;">{{$errors->has('category_id') ? $errors->first('category_id') : ''}}</h4>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Blog Title</label>
              <div class="col-md-9">
                <input type="text" class="form-control" name="blog_title"/>
              </div>
              <h4 style="color: red;">{{$errors->has('blog_title') ? $errors->first('blog_title') : ''}}</h4>
            </div>

            <div class="form-group">
              <label class="control-label col-md-3">Blog short Description</label>
              <div class="col-md-9">
                <textarea class="form-control" name="blog_short_description"></textarea>
              </div>
              <h4 style="color: red;">{{$errors->has('blog_short_description') ? $errors->first('blog_short_description') : ''}}</h4>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Blog long Description</label>
              <div class="col-md-9">
                <textarea class="form-control" id="editor" name="blog_long_description"></textarea>
              </div>
              <h4 style="color: red;">{{$errors->has('blog_long_description') ? $errors->first('blog_long_description') : ''}}</h4>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Blog Image</label>
              <div class="col-md-9">
                <input type="file" class="form-control" name="blog_image" accept="image/*"/>
              </div>
              <h4 style="color: red;">{{$errors->has('blog_image') ? $errors->first('blog_image') : ''}}</h4>
            </div>
            <div class="form-group">
              <label class="control-label col-md-3">Publication Status</label>
              <div class="col-md-9 radio">
                <label><input type="radio" name="publication_status" value="1"/> Published </label>
                <label><input type="radio" name="publication_status" value="0"/> Unpublished </label><br/>
              </div>
              <h4 style="color: red;">{{$errors->has('publication_status') ? $errors->first('publication_status') : ''}}</h4>
            </div>
            <div class="form-group">
              <div class="col-md-9 col-md-offset-3">
                <input type="submit" name="add_blog_btn" class="btn btn-success btn-block" value="Save Blog"/>
              </div>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
@endsection
