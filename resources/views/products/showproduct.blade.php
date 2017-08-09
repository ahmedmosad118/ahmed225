@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title">{{$products->name}} detailes</h1>
            </div>
            <div class="box-body">
          <div class="col-sm-4">
           @foreach($products->product_images as $image)
           
            <img src="../productimages/{{$image->image->image}}" width="200px" height="200px" style="display: inline;"></img>
            @endforeach
            </div>

            <br>

            <h3>Price: {{$products->selling_price}}</h3>
            <h4>Car brand: {{$products->brand->name}}</h4>
            <h4>Car model: {{$products->model->name}}</h4>
            <h4>Car edition: {{$products->edition->name}}</h4>

            <div class="box-body">
              <p class="card-text">  {{$products->description}}</p>
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
