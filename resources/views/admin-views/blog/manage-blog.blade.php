@extends('admin-views.master');

@section('content-body')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center text-success" id='manage_category_message'>{{Session::get('message')}}</h4>
        <h4 class="text-center text-success">Manage Blog</h4>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <tr>
            <th>SL NO</th>
            <th>Blog Title</th>
            <th>Category Name</th>
            <th>Publication Status</th>
            <th>Action</th>
          </tr>
          
          <tr>
            <td>1</td>
            <td>Demo</td>
            <td>Demo</td>
            <td>Demo</td>
            
            <td>

            
              <a href="" class="btn btn-warning btn-xs"> Unpublish
              <!--  <span class="glyphicon glyphicon-arrow-up"></span> -->
              </a>
            
              <a href="" class="btn btn-info btn-xs"> Publish
              <!--  <span class="glyphicon glyphicon-arrow-up"></span>-->
              </a>
            
              <a href="" class="btn btn-success btn-xs">Edit
              <!--  <span class="glyphicon glyphicon-edit"></span>-->
              </a>
              <a href="" class="btn btn-danger btn-xs">Delete
                <!--<span class="glyphicon glyphicon-trash"></span>-->
              </a>
            </td>
          </tr>
        
        </table>
      </div>
    </div>
  </div>
</div>

@endsection