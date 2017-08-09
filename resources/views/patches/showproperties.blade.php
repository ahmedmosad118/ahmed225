@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Property List</h1>
@stop

@section('content')
      <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Property Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Patch Name </th>
                  <th>Buying Price</th>
                  <th>Product</th>
                  <th>Supplier name</th>
                  <th>Count</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($patches as $patch)
                <tr>
                  <td>{{$patch->id}}</td>
                  <td>{{$patch->name}}</td>
                  <td>{{$patch->buying_price}}</td>
                  <td><a href="/show-product/{{$patch->product->id}}">{{$patch->product->name}}</a></td>
                  <td><a href="show-supplier/{{$patch->supplier->id}}">{{$patch->supplier->name}}</a></td>
                  <td>{{$patch->count}}</td>
                   <td>
                    <a href="/patch-edit/{{$patch->id}}">
                      <button type="button" class="btn btn-info">Edit</button>
                     
                    </a>
                  </td>
                   <td>
                   
                     <a href="/patch-delete/{{$patch->id}}"><button type="button" class="btn btn-danger">Delete</button></a> 
                      
                    
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
