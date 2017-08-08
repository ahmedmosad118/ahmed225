@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Image List</h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edition Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($images as $image)
                <tr>
                  <td>{{$image->id}}</td>
                  <td><img src="../productimages/{{$image->image}}" width="30px" height="30px"></td>
                  <td>{{$image->image}}</td>
/admin/upload-editimage
                   <td>
                    <a href="/image-edit/{{$image->id}}">
                    <button type="button" class="btn btn-info">
                    <span class=" glyphicon glyphicon-edit"></span> Edit
                  </button>                     
                    </a>
                  </td>
                   <td>
                   
                     <a href="/image-delete/{{$image->id}}">   
                          <button type="button" class="btn btn-danger">
                      <span class=" glyphicon glyphicon-trash"></span> Delete
                      </button></a> 
                </tr>
                @endforeach
              
                </tbody>
              </table>
            </div>
          </div>




        </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
