@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{$supplier->name}} detailes </h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <th> Name </th>
                  <th>Phone</th>
                  <th>Address</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>{{$supplier->name}}</td>
                  <td>{{$supplier->phone}}</td>
                  <td>{{$supplier->address}}</td>
                </tr>

              
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
