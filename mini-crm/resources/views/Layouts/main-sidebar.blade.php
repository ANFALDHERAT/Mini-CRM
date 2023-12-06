
<style>
    <style>

    .page-sidebar {
        width: 100px;
    }



</style>

<div class="page-wrapper" >

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row" >
            <div class="main-header-left d-lg-none w-auto" >
                <div class="logo-wrapper">

                </div>
            </div>
            <div class="mobile-sidebar w-auto"  style="color:  #04041E">
                <div class="media-body text-end switch-sm"  style="color:  #04041E">
                    <label class="switch"  style="color:  #04041E">
                        <a href="javascript:void(0)"  style="color:  #04041E">
                            <i id="sidebar-toggle" data-feather="align-left"  style="color:#04041E"></i>
                        </a>
                    </label>


                </div>

            </div>

            <div class="nav-right col">

                <ul class="nav-menus">
                    <li style="text-align: center;margin-right:200px">
                    @include('Layouts.main-headerbar')

                    </li>
                    <li>
                        <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                            <i data-feather="maximize-2"></i>
                        </a>
                    </li>

                    <li class="onhover-dropdown">

                        <ul class="language-dropdown onhover-show-div p-20">
                            <li>
                                <a href="javascript:void(0)" data-lng="en">
                                    <i class="flag-icon flag-icon-is"></i>English</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-lng="es">
                                    <i class="flag-icon flag-icon-um"></i>Spanish</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-lng="pt">
                                    <i class="flag-icon flag-icon-uy"></i>Portuguese</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" data-lng="fr">
                                    <i class="flag-icon flag-icon-nz"></i>French</a>
                            </li>
                        </ul>
                    </li>

                    <li class="onhover-dropdown">
                        <div class="media align-items-center">
                            <img class="align-self-center pull-right img-50 blur-up lazyloaded"
                                src="{{ asset('assets/images/WhatsApp Image 2023-10-02 at 3.34.14 PM.jpeg') }}" alt="header-user" style="border-radius: 80%;">
                            <div class="dotted-animation">
                                <span class="animate-circle"></span>
                                <span class="main-circle"></span>
                            </div>
                        </div>
                        <ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">

                            <li>
                                @if (session('loginname'))
                                    <a href="{{ route('adminLogout') }}">
                            <button type="submit" class="btn " style="width: 200px;font-size:10px;background-color: #04041E;color:white ">Log out</button>
                          </a>
                           @endif

                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="d-lg-none mobile-toggle pull-right">
                    <i data-feather="more-horizontal"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block" style="background-color: #04041E">

            </div>
            <div class="sidebar custom-scrollbar" style="background-color: #04041E">
                <a href="javascript:void(0)" class="sidebar-back d-lg-none d-block"><i class="fa fa-times"
                        aria-hidden="true"></i></a>
                <div class="sidebar-user" style="background-color: #04041E">

                    <div>
                        <a href="/">
                            <img src="{{ asset('storage/image/Capture.PNG') }}" alt="AYSEL Logo" style="width: 200px; height: auto;">
                        </a>


                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li>
                        <a class="sidebar-header" href="/">
                            <i data-feather="home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>





                    <li>
                        <a class="sidebar-header" href="/employees">
                            <i data-feather="home"></i>
                            <span>Employee</span>
                        </a>


                    </li>

                    <li>
                        <a class="sidebar-header" href="/companies">
                            <i data-feather="home"></i>
                            <span>Company</span>
                        </a>


                    </li>












                    <li>
                        @if (session('loginname'))
                        <a href="{{ route('adminLogout') }}">
                <button type="submit" class="btn " style="width: 150px;font-size:10px;background-color:white;margin-left:20px;margin-top:40px">Log out</button>
              </a>
               @endif
                    </li>
                </ul>
            </div>
        </div>

        <div class="right-sidebar" id="right_side_bar">
            <div>

            </div>
        </div>
