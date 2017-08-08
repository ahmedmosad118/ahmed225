@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Product List</h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">{{$products->name}} Table</h3>
            </div>
           
           <p>{{$products->brand->name}}</p>
            <div class="box-body">
            <div class="card">
              <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-block">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           </div>
           </div>
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
