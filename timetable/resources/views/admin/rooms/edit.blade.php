@extends('admin.layouts.master')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2">
        <div class="col-sm-9">
		    <h4 class="page-title">Edit Room</h4>
		    <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
            <li class="breadcrumb-item active" aria-current="page">Room</li>
         </ol>
	   </div>
	   <div class="col-sm-3">
       <div class="btn-group float-sm-right">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light"><a href="{{url('/rooms')}}"> view Rooms</a></button>
        </button>
       
        </div>
      </div>
     </div>
     </div>
    <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form action="{{ route('rooms.update',$rooms->id)}}" method="post">
              {{ csrf_field() }}
             {{ method_field('PATCH') }}
                <h4 class="form-header text-uppercase">
                  <i class="fa fa-user-circle-o"></i>
                   Edit Room
                </h4>
                <div class="form-group row">
                  <label for="input-1" class="col-sm-2 col-form-label"> Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" value="{{ $rooms->room_name}}" name="room_name" required>
                  </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                    <button type="submit" class="btn btn-success"><i class="fa fa-check-square-o"></i> SAVE</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div><!--End Row-->

@endsection