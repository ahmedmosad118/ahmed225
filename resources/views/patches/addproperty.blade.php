@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Add Property</h1>
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

          <span>{{ $error }}</span>

            @endforeach
           </div>
            
      
        <br>

        @endif
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add New Property</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/admin/upload-addproprty">
            {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label > Name</label>
                  <input type="text" name="name" class="form-control"  placeholder="Add Car  name">
                </div>
       
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

            </div>
          </div>
           <div class="col-md-6">
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Patch Property Values</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="/admin/upload-addpatch-proprty">
            {{csrf_field()}}
              <div class="box-body">
              
                    <div class="form-group">
              <label >Select Patch:</label>
              <select class="form-control" name="patch_id" >
              @foreach($patches as $patch )
                <option value="{{$patch->id}}">{{$patch->name}}</option>
                @endforeach
              </select>
            </div>
                <div class="form-group">
              <label >Select Property :</label>
              <select class="form-control" name="property_id" >
              @foreach($properties as $property )
                <option value="{{$property->id}}">{{$property->name}}</option>
                @endforeach
              </select>
            </div>
              <div class="form-group">
                  <label > Name</label>
                  <input type="text" name="name" class="form-control"  placeholder="Add Car  name">
                </div>
                  <div class="form-group">
                  <label > Value</label>
                  <input type="text" name="value" class="form-control"  placeholder="Add Car  name">
                </div>
       
              </div>
              <!-- /.box-body -->

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
