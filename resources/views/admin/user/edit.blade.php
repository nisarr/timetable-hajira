@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h4 class="page-title">Edit User</h4>
      </div>
      <div class="col-sm-3">
        <div class="float-sm-right">
          <a href="{{url('users')}}" class="btn btn-gradient-bloody waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-eye"></i> View User</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb-->
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title"><i class="fa fa-user-circle-o"></i> Edit User</div>
        <hr>
        <form method="post" action="{{route('users.update',$user->id)}}" enctype="multipart/form-data">
        {{ csrf_field() }}
					{{ method_field('PATCH') }}
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-13">Name</label>
                <input type="text" name="teacher_name" value="{{$user->name}}" class="form-control" placeholder="Name">
              </div>
            </div>
          
            
          </div>
            <div class="row">
              <div class="col-sm-4">
              <div class="form-group">
                <label for="input-14"> Email</label>
                <input type="email" name="email" value="{{$user->email}}" class="form-control form-control-square"  placeholder="e.g @gmai.com">
              </div>
            </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label for="input-14"> Password</label>
                  <input type="password" name="password" class="form-control form-control-square"  placeholder="Password">
                </div>
              </div>
            </div>
 
 
          <div class="row">
          <div class="col-sm-4">
              <div class="form-group">
                <label for="input-13">Image</label>
                <img style="width: 100px; height:70px;" src="{{asset('/teacher/profile/'.$user->image)}}" alt="teacher">
                <input type="file" name="image" class="form-control">
              </div>
            </div>

          </div>

          <div class="form-group">
            <div class="form-footer">
              <a href="{{ url('users') }}" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</a>
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
