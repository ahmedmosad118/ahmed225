@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Product</h1>
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

          <span>{{ $error }}</span>

            @endforeach
           </div>
            
      
        <br>

        @endif
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Product</h3>
            </div>
         
            <form role="form" method="post" action="admin/upload-addproduct">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label > Name</label>
                  <input type="text" name="name" class="form-control"  placeholder="Add Product  name">
                </div>
                   <div class="form-group">
                  <label > Price</label>
                  <input type="text" name="selling_price" class="form-control"  placeholder="Add Product  Price">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea"> Product Description</label>
                  <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                <label > Product Type</label>
               <select class="form-control" name="product_type_id" >
            
              @foreach($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
                @endforeach
              </select>
            </div> 
          <div class="form-group">
              <label > Car Brand</label>

              <select class="form-control" name="car_brand_id" >

              <option value="">All</option>
              @foreach($brands as $brand)
                <option value="{{$brand->id}}">{{$brand->name}}</option>
                @endforeach
              </select>
            </div> 
            <div class="form-group">
            <label > Car Model</label>
              <select class="form-control" name="car_model_id" >
              <option value="">All</option>
              @foreach($models as $model)
                <option value="{{$model->id}}">{{$model->name}} </option>

                @endforeach
              </select>
            </div> 
            <div class="form-group">
            <label > Car Editions</label>
             <select class="form-control" name="car_edition_id" >
             <option value="">All</option>
              @foreach($editions as $edition)
                <option value="{{$edition->id}}">{{$edition->name}} {{$edition->year_from}}-{{$edition->year_to}}</option>

                @endforeach
              </select>
            </div> 

              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

            </div>
          </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
