@extends('admin-views.master')

@section('content-body')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="text-center text-success">Add Category Form</h4>
        </div>
        <div class="panel-body">
          <h4 class="text-center text-success">{{ Session::get('message')}}</h4>
          <form action="{{route('save-new-category')}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="control-label col-md-4">Category Name</label>
              <div class="col-md-8">
                <input type="text" name="category_name" class="form-control"/>
              </div>
              <h4 style="color: red;">{{$errors->has('category_name') ? $errors->first('category_name') : ''}}</h4>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Category Description</label>
              <div class="col-md-8">
                <textarea class="form-group" name="category_description"></textarea>
              </div>
              <h4 style="color: red;">{{$errors->has('category_description') ? $errors->first('category_description') : ''}}</h4>
            </div>
            <div class="form-group">
              <label class="control-label col-md-4">Publication Status</label>
              <div class="col-md-8 radio">
                <label><input type="radio" checked name="publication_status" value="1"/> Published</label>
                <label><input type="radio" name="publication_status" value="0"/> Unpublished</label>
              </div>
              <h4 style="color: red;">{{$errors->has('publication_status') ? $errors->first('publication_status') : ''}}</h4>
            </div>
            <div class="form-group">
              <div class="col-md-8 col-md-offset-4">
                <input type="submit" name="add_catagory_submit_btn" class="btn btn-success btn-block" value="Save Catagory"/>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
