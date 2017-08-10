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
              <h3 class="box-title">Product Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Product Name </th>
                  <th>Product Price</th>
                  <th>Description</th>
                  <th>Product Type</th>
                  <th>Car Brand</th>
                  <th>Model </th>
                  <th>Edition</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                  <td>{{$product->id}}</td>
                  <td><a href="show-product/{{$product->id}}">{{$product->name}}</a></td>
             
                  <td>{{$product->selling_price}}</td>
                  <td>{{$product->description}}</td>
                  <td>{{$product->type->name}}</td>
                  <td>{{$product->brand->name}}</td>
                  <td>{{$product->model->name}}</td>
                   <td>{{$product->edition->name}}{{$product->edition->year_from}}-{{$product->edition->year_to}}</td>
                   <td>
                    <a href="/product-edit/{{$product->id}}">
                    <button type="button" class="btn btn-info">
                    <span class=" glyphicon glyphicon-edit"></span> Edit
                  </button>                     
                    </a>
                  </td>
                   <td>
                   
                     <a href="/product-delete/{{$product->id}}">        <button type="button" class="btn btn-danger">
                    <span class=" glyphicon glyphicon-trash"></span> Delete
                     </button></a> 
                      
                    
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
