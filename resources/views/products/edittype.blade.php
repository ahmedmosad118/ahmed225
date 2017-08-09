@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Type</h1>
@stop

@section('content')
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
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
              <h3 class="box-title">Edit Product Type</h3>
            </div>
      
            <form role="form" method="post" action="/admin/upload-type/{{$type->id}}">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label > Name</label>
                  <input type="text" name="name" class="form-control"  value="{{$type->name}}">
                </div>
       
              </div>
             <div class="form-group">
              <label >Select Type parent:</label>
              <select class="form-control" name="parent_id " >
              <option >none</option>
              @forelse($types as $type)
                <option value="{{$type->id}}">{{$type->name}}</option>
                @empty

               
                @endforelse
              </select>

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
