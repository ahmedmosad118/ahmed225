@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Statuse</h1>
@stop

@section('content')

              <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
   
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add  Statuse</h3>
            </div>
         
            <form role="form" method="post" action="/admin/upload-addorder-statuse-record">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                <label > Order id</label>
               <select class="form-control" name="order_id" >
            
                <option value="{{$order->id}}">{{$order->id}}</option>
              </select>
            </div> 
          <div class="form-group">
              <label > Statuse Id </label>

              <select class="form-control" name="statuse_id" >

              @foreach($statuses as $statuse)
                <option value="{{$statuse->id}}">{{$statuse->name}}</option>
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
</section>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
