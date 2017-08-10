@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agents List </h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Agents Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <th>ID</th>
                  <th> Name </th>
                  <th> Shipping Company </th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th> Job </th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($agents as $agent)
                <tr>
                  <td>{{$agent->id}}</td>
                  <td><a href="">{{$agent->name}}</a></td>
                  <td>{{$agent->company->name}}</td>
                  <td><a href="">{{$agent->email}}</a></td>
                  <td><a href="">{{$agent->phone}}</a></td>
                  <td><a href="">{{$agent->job}}</a></td>
                  <td><a href="/agent-edit/{{$agent->id}}"><button type="button" class="btn btn-info">Edit</button></a></td>
                  <td> <a href="/agent-delete/{{$agent->id}}"><button type="button" class="btn btn-danger">Delete</button></a></td>
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
