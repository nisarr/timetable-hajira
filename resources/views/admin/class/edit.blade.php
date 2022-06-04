@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h4 class="page-title">Edit  Classes</h4>
      </div>
      <div class="col-sm-3">
        <div class="float-sm-right">
          <a href="{{url('classes')}}" class="btn btn-gradient-bloody waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-eye"></i> View Classes</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb-->
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title"><i class="fa fa-user-circle-o"></i> Update Classes</div>
        <hr>
        <form method="post" action="{{route('classes.update',$classes->id)}}">
        {{ csrf_field() }}
             {{ method_field('PATCH') }}
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-13"> Class Name</label>
                <input type="text" name="name" value="{{$classes->name}}" class="form-control" placeholder="Name" required>
              </div>
            </div>

          </div>

          <div class="form-group">
            <div class="form-footer">
              <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
              <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!--start overlay-->
  <div class="overlay toggle-menu"></div>
  <!--end overlay-->
</div>
<!-- End container-fluid-->


@endsection
