@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Companies List </h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Companies Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <th>ID</th>
                  <th> Name </th>
                  <th>Website</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($companies as $company)
                <tr>
                  <td>{{$company->id}}</td>
                  <td><a href="">{{$company->name}}</a></td>
                  <td><a href="https://{{$company->website}}">{{$company->website}}</a></td>
                  <td><a href="/company-edit/{{$company->id}}"><button type="button" class="btn btn-info">Edit</button></a></td>
                  <td> <a href="/company-delete/{{$company->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                </tr>
                @empty
                Sorry
                @endforelse

              
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>




        </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
