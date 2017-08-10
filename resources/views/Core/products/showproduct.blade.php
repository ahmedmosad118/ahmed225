@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1></h1>
@stop

@section('content')
      <section class="content">
          <div class="box">
            <div class="box-header">
              <h1 class="box-title">{{$products->name}} detailes</h1>
            </div>
            <div class="box-body">
            <div class="row">

           @foreach($products->product_images as $image)
            <div class="col-md-4 text-center">
            <img class="img-thumbnail" src="../productimages/{{$image->image->image}}" width="300px" height="300px"></img>
            </div>
            @endforeach
            </div>
            <br>

            <div class="row">
            <div class="col-md-3">            
            <p>Price: {{$products->selling_price}}</p>
            </div>
            <div class="col-md-3"> 
            <p>Car brand: {{$products->brand->name}}</p>
            </div>
            <div class="col-md-3"> 
            <p>Car model: {{$products->model->name}}</p>
            </div>
            <div class="col-md-3"> 
            <p>Car edition: {{$products->edition->name}}</p>
            </div>
            </div>

            <div class="box-body">
              <p class="card-text">  {{$products->description}}</p>
          </div>
            </div>

        </div>


        </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
