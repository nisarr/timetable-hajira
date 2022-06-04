@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumb-->
    <div class="row pt-2 pb-2">
      <div class="col-sm-9">
        <h4 class="page-title">Add New Teacher</h4>
      </div>
      <div class="col-sm-3">
        <div class="float-sm-right">
          <a href="{{url('teachers')}}" class="btn btn-gradient-bloody waves-effect waves-light m-1"> <i aria-hidden="true" class="fa fa-eye"></i> View Teachers</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Breadcrumb-->
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <div class="card-title"><i class="fa fa-user-circle-o"></i> Add Teacher</div>
        <hr>
        <form method="post" action="{{route('teachers.store')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-13">Name</label>
                <input type="text" name="teacher_name" class="form-control" placeholder="Name">
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-14"> Email</label>
                <input type="email" name="email" class="form-control form-control-square"  placeholder="e.g @gmai.com">
              </div>
            </div>

            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-14">Department</label>
               <select name="depart_id" id="" class="form-control form-control-square">
                 @foreach($departments as $department)
                 <option value="{{$department->id}}">{{$department->department_name}}</option>
                 @endforeach
               </select>
              </div>
            </div>  

          </div>

          <div class="row">
            <div class="col-sm-4">
              <div class="form-group">
                <label for="input-13"> Image</label>
                <input type="file" name="image" class="form-control" placeholder="Name">
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
