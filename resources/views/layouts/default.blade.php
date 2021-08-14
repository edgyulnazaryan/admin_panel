<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>
        @section('title')| Josh Admin Template @show
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" />
    <link rel="stylesheet" href="{{asset('fonts/iconmind.css')}}">

    <!-- global css -->
    <link type="text/css" href="{{ asset('css/app.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/css/perfect-scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css')}}">
    <style>
        #demo {
            position: relative;

            overflow: auto;
        }
    </style>
    <!-- end of global css -->
    
    <!-- vendors  css -->
    @yield('header_styles')
</head>

<body>
    <!-- header logo: style can be found in header-->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-light navbar-static-top" role="navigation">
            <a href="javascript:void(0)" class="ml-100 toggle-right d-xl-none d-lg-block">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                <img src="{{ asset('img/images/toggle.png')}}" alt="logo" />


            </a>
            <!-- Header Navbar: style can be found in header-->
            <!-- Sidebar toggle button-->
            <!-- Sidebar toggle button-->

            <div class="navbar-right ml-auto">
                <ul class="navbar-nav nav">

                    {{-- <li class="dropdown notifications-menu nav-item dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle nav-link dropdown-toggle"
                            data-toggle="dropdown" id="navbarDropdown">
                            <i class="im im-icon-Bell-2 fs-16"></i>


                        </a>
                        <ul class="dropdown-menu dropdown-notifications table-striped" aria-labelledby="navbarDropdown">
                            @isset($notifications)
                            @foreach($notifications as $notification)
                            <li>
                                <a href="{{ URL::to('emails/'.$notification->id ) }}"
                    class="notification dropdown-item striped-col">
                    @if($notification->senderName->pic)
                    <img src="{!! $notification->senderName->pic !!}" alt="img" class="notif-image rounded-circle" />
                    @else
                    <img src="{{  Gravatar::src($notification->senderName->email)}}" class="notif-image  rounded-circle"
                        alt="User Image" />
                    @endif
                    <div class="notif-body"><strong>{{ $notification->senderName->first_name }}</strong>
                        shared post from
                        <strong>{{ $notification->subject }}</strong>.
                        <br>
                        <small>{{ $notification->created_at->diffForHumans() }}</small>
                    </div>
                    <span class="badge badge-success label-mini msg-lable">New</span>
                    </a>
                    </li>
                    @endforeach
                    @endisset
                    <li class="dropdown-footer"><a href="{{ url('emails/inbox') }}">View All messages</a></li>
                </ul>
                </li> --}}
                <li class="dropdown notifications-menu nav-item dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown"
                        id="navbarDropdown">
                        <i class="im im-icon-Boy fs-16"></i>


                    </a>
                    <ul class="dropdown-menu dropdown-notifications table-striped" aria-labelledby="navbarDropdown">

                        <li class="dropdown-footer">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown-->
                {{--<li class="dropdown user user-menu nav-item dropdown">--}}
                {{--<a href="javascript:void(0)" class="dropdown-toggle padding-user nav-link dropdown-toggle" data-toggle="dropdown" id="userDropdown">--}}
                {{--@if(Auth::user()->pic)--}}
                {{--<span class="userActivity online"></span>--}}
                {{--<img src="{!! Auth::user()->pic !!}" alt="img"--}}
                {{--class="rounded-circle img-fluid pull-left"/>--}}
                {{--@else--}}
                {{--<span class="userActivity online"></span>--}}
                {{--<img src="{{  Gravatar::src(Auth::user()->email)}}" width="35" alt="User Image"
                class="rounded-circle img-fluid pull-left" />--}}
                {{--@endif--}}
                {{--<div class="riot">--}}
                {{--<span class="fa fa-sort-down caret"></span>--}}
                {{--</div>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu " aria-labelledby="navbarDropdown">--}}
                {{--<!-- User name-->--}}
                {{--@guest--}}
                {{--@else--}}
                {{--<li class="user-name text-center text-primary">--}}
                {{--<span>{{ Auth::user()->first_name }}</span>--}}
                {{--</li>--}}
                {{--<!-- Menu Body -->--}}
                {{--<li class="p-t-3">--}}
                {{--<a href="{{ URL::route('users.show',Auth::user()->id) }}" class="dropdown-item">--}}
                {{--Profile<i class="im im-icon-User float-right mt-1"></i>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ URL::route('users.edit', Auth::user()->id) }}" class="dropdown-item">--}}
                {{--Settings <i class="im im-icon-Gear float-right  mt-1"></i>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ URL::route('lockscreen') }}" class="dropdown-item">--}}
                {{--Lock <i class="im im-icon-Unlock-2 float-right  mt-1"></i>--}}
                {{--</a>--}}
                {{--</li>--}}
                {{--<li>--}}
                {{--<a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" class="dropdown-item">--}}
                {{--Logout <i class="im im-icon-Power-2 float-right  "></i>--}}
                {{--</a>--}}
                {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                {{--{{ csrf_field() }}--}}
                {{--</form>--}}
                {{--</li>--}}
                {{--@endguest--}}
                {{--</ul>--}}
                {{--</li>--}}
                </ul>
            </div>
        </nav>
    </header>
    <div class="wrapper">

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-aside">
            <!-- sidebar: style can be found in sidebar-->
            <section class="sidebar metismenu sidebar-res">
                @include("layouts/leftmenu")
                <!-- menu -->
            </section>
            <!-- /.sidebar -->
        </aside>


        <!--            right side bar ----------->
        <aside class="right-aside">
            @yield('content')
        </aside>
    </div>
    <!-- ./wrapper -->
    <!-- Footer end -->
    <!-- SCRIPTS -->
    <!-- global js -->
    <script src="{{ asset('js/app.js')}}" type="text/javascript"></script>
    <!-- end of page level js -->
    <!-- Start of vendor js -->
    @yield('footer_scripts')

    <script src="{{ asset('vendors/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('js/custom.js')}}"></script>

</body>

</html>
