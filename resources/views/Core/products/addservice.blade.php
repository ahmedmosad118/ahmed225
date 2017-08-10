@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Service</h1>
@stop

@section('content')
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
        @if (count($errors)>0)
          <div class="box box-danger" style="margin: : 20px">
            <div class="box-header with-border">
              <h3 class="box-title"><b style="color: red;">Error</b></h3>
            </div>
            @foreach ($errors->all() as $error)

          <ul><li>{{ $error }} </li></ul>

            @endforeach
           </div>
            
      
        <br>

        @endif
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Service</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/admin/upload-addservice">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label > Name</label>
                  <input type="text" name="name" class="form-control"  placeholder="Add Car  name">
                </div>
       
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

            </div>
          </div>



        </section>
          <section class="content">
          <div class="row">
            <div class="col-md-12">

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add  Product Service</h3>
            </div>
         
            <form role="form" method="post" action="/admin/upload-addproduct-service">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                <label > Product id</label>
               <select class="form-control" name="product_id" >
            
              @foreach($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
              </select>
            </div> 
          <div class="form-group">
              <label > Service Id </label>

              <select class="form-control" name="product_service_id" >

              @foreach($services as $service)
                <option value="{{$service->id}}">{{$service->name}}</option>
                @endforeach
              </select>
            </div> 
               <div class="box-body">
                <div class="form-group">
                  <label > Service Price</label>
                  <input type="text" name="price" class="form-control"  >
                </div>

            </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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
