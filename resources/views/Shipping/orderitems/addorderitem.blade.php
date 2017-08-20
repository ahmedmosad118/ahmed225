@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Order Item</h1>
@stop

@section('content')
    <section class="content">
      <div class="row">
   
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Order Item</h3>
            </div>
         
            <form role="form" method="post" action="/admin/upload-order-item">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                <label > Patch </label>
               <select class="form-control" name="patch_id" >
            
              @foreach($patches as $patch)
                <option value="{{$patch->id}}">{{$patch->name}}</option>
                @endforeach
              </select>
            </div> 
          <div class="form-group">
              <label > Order </label>

              <select class="form-control" name="order_id" >
              @foreach($orders as $order)

                <option value="{{$order->id}}">{{$order->id}}</option>

                @endforeach
              </select>
            </div> 
                <div class="box-body">
                <div class="form-group">
                  <label >Price</label>
                  <input type="text" name="price" class="form-control"  >
                </div>
                </div>
               <div class="box-body">
                <div class="form-group">
                  <label >Count</label>
                  <input type="text" name="count" class="form-control"  >
                </div>
                </div>


            </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
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
