@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Edit Edtion</h1>
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
              <h3 class="box-title">Edit Edition</h3>
            </div>
            <form role="form" method="post" action="/admin/update-edition/{{$edition->id}}">
            {{csrf_field()}}
             <div class="form-group">
              <label >Select Car Model:</label>
              <select class="form-control" name="car_model_id" >
              @foreach($models as $model)
                <option value="{{$model->id}}">{{$model->name}}</option>
                @endforeach
              </select>
            </div> 
              <div class="box-body">
                <div class="form-group">
                  <label > Name</label>
                  <input type="text" name="name" class="form-control"  value="{{$edition->name}}">
                </div>
                       <div class="form-group">
                  <label > Year from</label>
                  <input type="text" name="year_from" class="form-control"  value="{{$edition->year_from}}">
                </div>
                <div class="form-group">
                  <label > Year to</label>
                  <input type="text" name="year_to" class="form-control"  value="{{$edition->year_to}}">
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
