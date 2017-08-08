@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Brand List</h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Brand Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Brand Name </th>
                  <th>Add Model</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($brands as $brand)
                <tr>
                  <td>{{$brand->id}}</td>
                  <td><a href="show-model/{{$brand->id}}">{{$brand->name}}</a></td>
                  <th><a href="/addmodel/{{$brand->id}}"> <button type="button" class="btn btn-success">
                  <span class=" glyphicon glyphicon-plus"></span> Add
                  </button></a></th>
                  <td>
                    <a href="/edit-brand/{{$brand->id}}"">
                  <button type="button" class="btn btn-info">
                  <span class=" glyphicon glyphicon-edit"></span> Edit
                  </button>                     
                    </a>
                  </td>
                   <td>
                   
                     <a href="/delete-brand/{{$brand->id}}">
                     <button type="button" class="btn btn-danger">
                     <span class=" glyphicon glyphicon-trash"></span> Delete
                     </button>
                      
                    
                  </td>
                  <td> 
                @endforeach
              
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->




        </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
