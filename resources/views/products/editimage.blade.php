@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Image</h1>
@stop

@section('content')

  <div class="content-wrapper" style="min-height: 916px">
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
              <h3 class="box-title">Edit  Image</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/admin/upload-editimage/{{$image->id}}" enctype="multipart/form-data" >
            {{csrf_field()}}
              <div class="box-body">
               
                  <div class="form-group">
                  <label > Image</label>
                  <input type="file" name="image"   >
                </div>


       
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
            </form>
          </div>

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
 


