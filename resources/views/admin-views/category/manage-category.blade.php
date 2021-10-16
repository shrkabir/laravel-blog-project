@extends('admin-views.master');

@section('content-body')
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="text-center text-success" id='manage_category_message'>{{Session::get('message')}}</h4>
        <h4 class="text-center text-success">Manage Category</h4>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <tr>
            <th>SL NO</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th>Publication Status</th>
            <th>Action</th>
          </tr>
          
        </table>
      </div>
    </div>
  </div>
</div>

@endsection