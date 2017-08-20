@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Property List</h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Property Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Property Name </th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($properties as $property)
                <tr>
                  <td>{{$property->id}}</td>
                  <td>{{$property->name}}</td>
                    <a href="/property-edit/{{$property->id}}">
                      <button type="button" class="btn btn-info">Edit</button>
                     
                    </a>
                  </td>
                   <td>
                   
                     <a href="/property-delete/{{$property->id}}"><button type="button" class="btn btn-danger">Delete</button></a> 
                      
                    
                  </td>
                  
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
