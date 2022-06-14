
                <!-- LOGO AND MENU SECTION -->
<div class="top-logo" data-spy="affix" data-offset-top="250">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wed-logo">
                    <a href="{{url('/')}}"><img style="width: 80px; height:80px; margin-top:-12px;" src="{{ asset ('frontend-theme/images/logo2.png')}}" alt="" />
                    </a>
                </div>
                <div class="main-menu">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="about-menu">
                            <a href="{{url('about')}}" class="mm-arr">About us</a>
                        </li>
                        <li><a href="{{url('contact-us')}}">Contact us</a>
                        </li>
                        

                        @if(\Auth::check())

                        <?php
                        $user = \Auth::user();
                        // echo $user; die();
                        ?>
                        <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img style="width: 50px; margin-top:-10px;" src="{{asset('/teacher/profile/'.Auth::user()->image)}}" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>

                        <!-- Dropdown Structure -->
                        <ul id='top-menu' class='dropdown-content top-menu-sty'>
                            <li>
                                @if($user->role == 'admin')
                                    <a href="{{url('/home')}}" class="waves-effect">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        Admin Dashboard
                                    </a>
                                @elseif($user->role == 'teacher')
                                    <a href="{{url('/teacher/dashboard')}}" class="waves-effect">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        Dashboard
                                    </a>
                                @elseif($user->role == 'student')
                                    <a href="{{url('/student/dashboard')}}" class="waves-effect">
                                        <i class="fa fa-cogs" aria-hidden="true"></i>
                                        Dashboard
                                    </a>
                                @endif
                            </li>
                             
                            <li class="divider"></li>
                            <li>
                                <a href="{{url('logout')}}" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                            </li>
                        </ul>
                        @else
                        <li><a href="{{url('/login')}}" data-target="#modal1">Sign In</a>
                            @endif
                    </ul>
                </div>
            </div>
            <div class="all-drop-down-menu">

            </div>

        </div>
    </div>
</div>
<div class="search-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="search-form">
                    <form>
                        <div class="sf-type">
                            <div class="sf-input">
                                <input type="text" id="sf-box" placeholder="Search course and discount courses">
                            </div>
                         
                        </div>
                        <div class="sf-submit">
                            <input type="submit" value="Search Course">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--END HEADER SECTION-->