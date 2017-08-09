@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Company</h1>
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
              <h3 class="box-title">Edit Company</h3>
            </div>
            <form role="form" method="post" action="/admin/update-company/{{$company->id}}">
            {{csrf_field()}}
            <div class="box-body">
                <div class="form-group">
                  <label > Name</label>
                  <input type="text" name="name" class="form-control" value="{{$company->name}}"  >
                </div>
                </div>
                <div class="box-body">
                <div class="form-group">
                  <label >Phone</label>
                  <input type="text" name="website" class="form-control" value="{{$company->website}}"  >
                </div>
                </div>
                <div class="box-body">
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
