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
		  <div class="card-title text-uppercase text-center py-3">Sign Up</div>
          <form method="POST" action="{{ route('register') }}">
                        @csrf
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputName" class="sr-only">Name</label>
                  <input id="name" type="text" class="form-control form-control-rounded @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputEmailId" class="sr-only">Email ID</label>
                  <input id="email" type="email" class="form-control form-control-rounded @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email ID" required autocomplete="email">

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
				  <input id="password" type="password" class="form-control form-control-rounded @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="new-password">

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
			  <div class="form-group">
			   <div class="position-relative has-icon-right">
				  <label for="exampleInputRetryPassword" class="sr-only">Retry Password</label>
				  <input id="password-confirm" type="password" class="form-control form-control-rounded" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			 <button type="submit" class="btn btn-primary shadow-primary btn-round btn-block waves-effect waves-light">Sign Up</button>
			  <div class="text-center pt-3">
				<!-- <p>or Sign up with</p> -->
				<!-- <a href="javascript:void()" class="btn-social btn-social-circle btn-google-plus waves-effect waves-light m-1"><i class="fa fa-google-plus"></i></a> -->
				<!-- <a href="javascript:void()" class="btn-social btn-social-circle btn-twitter waves-effect waves-light m-1"><i class="fa fa-twitter"></i></a> -->
				<hr>
				<p class="text-muted mb-0">Already have an account? <a href="{{url('/login')}}"> Sign In here</a></p>
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
