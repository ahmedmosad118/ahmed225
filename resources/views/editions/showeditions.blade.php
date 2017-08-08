@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edition List</h1>
@stop

@section('content')
   <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{$model->name}} Editions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Edition Name </th>
                  <th>Year From</th>
                  <th>Year To</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
              @foreach($model->editions as $edition)

               <tr>
                  <td>{{$edition->id}}</td>
                  <td>{{$edition->name}}</td>
                  <td>{{$edition->year_from}}</td>
                  <td>{{$edition->year_to}}</td>

                   <td>
                    <a href="/edition-edit/{{$edition->id}}">
                       <button type="button" class="btn btn-info">
                      <span class=" glyphicon glyphicon-edit"></span> Edit
                      </button>
                     
                    </a>
                  </td>
                   <td>
                   
                     <a href="/edition-delete/{{$edition->id}}">
                     <button type="button" class="btn btn-danger">
                    <span class=" glyphicon glyphicon-trash"></span> Delete
                   </button></a> 
                </tr>
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
