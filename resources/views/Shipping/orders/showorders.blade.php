@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Order List</h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Order Table</h3>
            </div>
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Patch Name </th>
                  <th>Price</th>
                  <th>Client Name</th>
                  <th>Shipping Company</th>
                  <th>Order done through</th>
                  <th>Order Statuse</th>
                  <th>edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                <tr>
                  <td>{{$order->id}}</td>
                  <td>@foreach($order->order_items as $items){{$items->patch->name}}--@endforeach</td>
                  <th>@foreach($order->order_items as $items){{$items->patch->name}}--@endforeach</th>
                  <th>{{$order->client->name}}</th>
                  <th>{{$order->order_done_through}}</th>
                  <th>{{$order->shipping_fees}}</th>
                  <th>@forelse($order->order_statuses_records as $statuse) {{$statuse->statuse->name}}
                   @empty    <a href="/add-order-statuse/{{$order->id}}"> 
                   <button type="button" class="btn btn-success">
                  <span class=" glyphicon glyphicon-plus"></span>
                   Add</button></a>
 
                  @endforelse</th>
                  <td>
                    <a href="/order-edit/{{$order->id}}">
                      <button type="button" class="btn btn-info">Edit</button>
                     
                    </a>
                  </td>
                   <td>
                   
                     <a href="/order-delete/{{$order->id}}"><button type="button" class="btn btn-danger">Delete</button></a> 
                      
                    
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
