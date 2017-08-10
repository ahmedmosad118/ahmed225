@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Order</h1>
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
              <h3 class="box-title">Add New Order</h3>
            </div>
         
            <form role="form" method="post" action="/admin/upload-addorder">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                <label>Client</label>
               <select class="form-control" name="client_id" >
            
              @foreach($clients as $client)
                <option value="{{$client->id}}">{{$client->name}}</option>
                @endforeach
              </select>
            </div> 
          <div class="form-group">
              <label> Employee</label>

              <select class="form-control" name="employee_id" >

              @foreach($employees as $employee)
                <option value="{{$employee->id}}">{{$employee->name}}</option>
                @endforeach
              </select>
            </div> 
            <div class="form-group">
            <label > Shipping Company</label>
              <select class="form-control" name="shipping_company_id" >
              @foreach($companies as $company)
                <option value="{{$company->id}}">{{$company->name}} </option>

                @endforeach
              </select>
            </div> 
                <div class="form-group">
                  <label > Order done through </label>
                  <input type="text" name="order_done_through" class="form-control" >
                </div>
                   <div class="form-group">
                  <label > Shippng fees</label>
                  <input type="text" name="shipping_fees" class="form-control" >
                </div>
                <div class="form-group">
                  <label > note </label>
                  <input type="text" name="note" class="form-control" >
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
