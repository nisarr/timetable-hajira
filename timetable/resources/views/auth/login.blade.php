@extends('auth.layout.master')

@section('content')
<div id="wrapper">
 <div class="height-100v d-flex align-items-center justify-content-center">
	<div style="background-color: transparent;" class="card border-primary border-top-sm border-bottom-sm card-authentication1 mx-auto my-4 animated bounceInDown">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img style="width: 100px;" src="{{ asset('admin-theme/assets/images/unnamed.png')}}">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Login</div>
          <form method="POST" action="{{ route('login') }}">
                        @csrf
			
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputEmailId" class="sr-only">Email ID</label>
                  <input id="email" type="email" class="form-control form-control-rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Emila ID" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputPassword" class="sr-only">Password</label>
                  <input id="password" type="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
              <div class="form-row mr-0 ml-0">
			 <div class="form-group col-6">
			   <div class="icheck-primary">
                <input type="checkbox" id="user-checkbox" checked="" />
                <label for="user-checkbox">Remember me</label>
			  </div>
			 </div>
			 <!-- <div class="form-group col-6 text-right">
			  <a href="#">Reset Password</a>
			 </div> -->
			</div>
			 <button type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Login</button>
			  <div class="text-center pt-3">
				<!-- <p>or Sign up with</p> -->
				<!-- <a href="javascript:void()" class="btn-social btn-social-circle btn-facebook waves-effect waves-light m-1"><i class="fa fa-facebook"></i></a>
				<a href="javascript:void()" class="btn-social btn-social-circle btn-google-plus waves-effect waves-light m-1"><i class="fa fa-google-plus"></i></a>
				<a href="javascript:void()" class="btn-social btn-social-circle btn-twitter waves-effect waves-light m-1"><i class="fa fa-twitter"></i></a> -->
				<hr>
				<p class="text-muted mb-0">Do not have an account? <a href="{{url('/register')}}"> Sign Up here</a></p>
			  </div>
			 </form>
		   </div>
		  </div>
	     </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	</div><!--wrapper-->

@endsection
