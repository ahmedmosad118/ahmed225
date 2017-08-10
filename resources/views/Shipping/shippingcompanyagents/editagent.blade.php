@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Agent</h1>
@stop

@section('content')
       <section class="content" >
        <div class="row">
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
              <h3 class="box-title">Dedit Agent</h3>
            </div>
            <form role="form" method="post" action="/admin/update-agent/{{$agent->id}}">
            {{csrf_field()}}
              <div class="box-body">
             <div class="form-group">
              <label >Select Shaping Campany:</label>
              @foreach($companies as $company)
              <select class="form-control" name="shipping_company_id" >
                <option value="{{$company->id}}">{{$company->name}}</option>
              </select>
              @endforeach
            </div> 
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label > Name</label>
                  <input type="text" name="name" class="form-control" value="{{$agent->name}}">
                </div>
                <div class="box-body">
                  <div class="form-group">
                  <label > Phone</label>
                  <input type="text" name="phone" class="form-control" value="{{$agent->phone}}">
                </div>
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label > Email</label>
                  <input type="email" name="email" class="form-control" value="{{$agent->email}}">
                </div>
                </div>
              <div class="box-body">
                <div class="form-group">
                  <label > Job</label>
                  <input type="text" name="job" class="form-control" value="{{$agent->job}}">
                </div>
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





        </section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
