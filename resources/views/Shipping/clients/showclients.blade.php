@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Clients List</h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Clients Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th> Name </th>
                  <th> Address</th>
                  <th> Phone</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                <tr>
                  <td>{{$client->id}}</td>
                  <td><a href="show-model/{{$client->id}}">{{$client->name}}</a></td>
                  <td>{{$client->address}}</td>
                  <td>{{$client->phone}}</td>
                  <td>
                    <a href="/edit-client/{{$client->id}}"">
                  <button type="button" class="btn btn-info">
                  <span class=" glyphicon glyphicon-edit"></span> Edit
                  </button>                     
                    </a>
                  </td>
                   <td>
                   
                     <a href="/delete-client/{{$client->id}}">
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
