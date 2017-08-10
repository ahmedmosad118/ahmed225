@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Service List</h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Service Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Service  Name </th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                <tr>
                  <td>{{$service->id}}</td>
                  <td><a href="">{{$service->name}}</a></td>
                  <td>
                    <a href="/service-edit/{{$service->id}}"> <button type="button" class="btn btn-info">
          <span class=" glyphicon glyphicon-edit"></span> Edit
        </button>
                    </a>
                  </td>
                   <td>
                   
                     <a href="/service-delete/{{$service->id}}">
                     <button type="button" class="btn btn-danger"> 
                     <span class=" glyphicon glyphicon-trash"></span> Delete</button>
                      
                    
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
