<!--Start topbar header-->

<header class="topbar-nav">
 <nav class="navbar navbar-expand">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <!-- <li class="nav-item">
      <form class="search-bar">
        <input type="text" id="student_name" autocomplete="off" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
         <div id="student_list"  style=" background: #707B7C "></div>
      </form>
    </li> -->
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
   
   
    {{-- <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="#"><i class="flag-icon flag-icon-pk"></i></a>
    </li> --}}
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile">
        
          <!-- <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=0056b3&color=ffffff" class="img-circle" alt="user avatar"> -->
          <img src="{{asset('/teacher/profile/'.Auth::user()->image)}}" class="img-circle" alt="user avatar">
        </span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="{{asset('/teacher/profile/'.Auth::user()->image)}}" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">{{Auth::user()->name}}</h6>
            <p class="user-subtitle">{{Auth::user()->email}}</p>
            </div>
           </div>
          </a>
        </li>
        
        <li class="dropdown-divider"></li>
        {{-- <li class="dropdown-item"><i class="icon-settings mr-2"></i> 
          <a href="{{url('profile_user')}}">Setting</a>
        </li> --}}
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><a  href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                   <i class="icon-power mr-2"></i> 
                                   {{ __('Logout') }}
                            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                                 </form>  </a>
                                </li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
