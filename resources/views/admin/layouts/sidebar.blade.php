<!--Start sidebar-wrapper-->
<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
  <div class="brand-logo">
    <a href="{{url('/')}}">
      <img src="{{asset('logo2.png')}}" class="logo-icon" alt="logo icon">
      <h5 class="logo-text">UIIT</h5>
    </a>
  </div>

  <ul class="sidebar-menu do-nicescrol">
    <li>
      <a href="{{url('/home')}}" class="waves-effect">
        <i class="icon-home"></i> <span>Dashboard</span>
      </a>
    </li>

    <!-- rooms start-->
    <li>
      <a href="{{url('/rooms')}}" class="waves-effect">
        <i class="fa fa-building"></i>
        <span>Rooms</span>
      </a>
    </li>
    <!-- rooms end-->



    <!-- student information start-->
    
    <li>
      <a href="{{url('/departments')}}" class="waves-effect">
        <i class="fa fa-info-circle"></i>
        <span>Departments</span> 
      </a>
   
    </li>
    <!-- student information end-->

    <!-- teachers start-->
    <li>
      <a href="{{url('/teachers')}}" class="waves-effect">
        <i class="fa fa-users"></i>
        <span>Teachers</span>
      </a>
    </li>

    <!-- teachers end-->

    <!-- Classes start-->
    <li>
      <a href="{{url('/classes')}}" class="waves-effect">
        <i class="fa fa-edit"></i>
        <span>Classes</span>
      </a>
    </li>
    <!-- Classes end-->

    <!-- Section start-->
    <!-- <li>
      <a href="{{url('/section')}}" class="waves-effect">
        <i class="ti-shift-right"></i>
        <span>Sections</span>
      </a>
    </li> -->
    <!-- Section end-->

    <!-- Subject start-->
    <li>
      <a href="{{url('/courses')}}" class="waves-effect">
        <i class="fa fa-book"></i>
        <span>Courses</span>
      </a>
    </li>
    <!-- Subjects end-->

    <!-- classes schedule start-->

    <li>
      <a href="{{url('timeslots')}}" class="waves-effect">
        <i class="fa fa-bell"></i>
        <span>Time Schedule</span>
      </a>
    </li>
    <!-- classes schedule end-->

 


</ul> 
  
 </div>
<!--End sidebar-wrapper-->
