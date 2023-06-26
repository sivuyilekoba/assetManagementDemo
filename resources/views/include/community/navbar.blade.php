<style>
    #sidebarToggleBtn:hover {
        background: #5f1463 !important;
    }
</style>
<header class="main-header">
    @if (request()->session()->get('UserType') == 'Admin')
        <a href="/CommunityHome" class="logo" style="background-color:#5f1463; font-weight: bold; color: white;">
            <center>Administrator</center>
        </a>
    @elseif(request()->session()->get('UserType') == 'Assessor')
        <a href="/CommunityHome" class="logo" style="background-color:#5f1463; font-weight: bold; color: white;">
            <center>Assessor</center>
        </a>
    @elseif(request()->session()->get('UserType') == 'SuperIntendent')
        <a href="/CommunityHome" class="logo" style="background-color:#5f1463; font-weight: bold; color: white;">
            <center>Deputy Director</center>
        </a>
    @elseif(request()->session()->get('UserType') == 'Deputy Director')
        <a href="/CommunityHome" class="logo" style="background-color:#5f1463; font-weight: bold; color: white;">
            <center>Deputy Director</center>
        </a>
    @elseif(request()->session()->get('UserType') == 'Director')
        <a href="/CommunityHome" class="logo" style="background-color:#5f1463; font-weight: bold; color: white;">
            <center>Director</center>
        </a>
    @endif

    <nav class="navbar navbar-static-top" style="background-color:#7B1B81;" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button" id="sidebarToggleBtn">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o" aria-hidden="true"></i>
                        <span class="label label-danger"></span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="btn-flat"><a href="/CommunityAssessment/signed"
                                style="font-size:14px !important">View Assessments</a></li>
                    </ul>
                </li>

                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-success"></span>
                    </a>
                    <ul class="dropdown-menu">


                        <li class="btn-flat"><a href="/CommunityAssessment/today" style="font-size:14px !important">View
                                Assessments</a></li>
                    </ul>
                </li>

                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning"></span>
                    </a>
                    <ul class="dropdown-menu">

                        <li class="btn-flat"><a href="/CommunityAssessment/" style="font-size:14px !important">View
                                All</a></li>
                    </ul>
                </li>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{-- <img src="/public/dist/img/pic1.jpg" class="user-image" alt="User Image"> --}}
                        <img src="{{ asset('dist/img/pic1.jpg') }}" class="user-image" alt="User Image">
                        <span style="font-weight: bold;">{{ Auth::user()->name }} {{ Auth::user()->surname }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header" style="background-color:#7B1B81;">
                            <img src="{{ asset('dist/img/pic1.jpg') }}" class="user-image" alt="User Image">
                            <p>
                                {{ Auth::user()->name }} {{ Auth::user()->surname }}
                                {{-- <small>Date Joined: {{$share5[0]->created_at}}</small> --}}
                                <small>Date Joined: 2020-01-01</small>
                            </p>
                        </li>
                        ;
                        <!-- Menu Footer-->
                        <li class="user-footer">

                            <div class="pull-right">
                                <a class="btn btn-default btn-flat" href="/FleetAdmin">Change Password</a>
                                <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->

            </ul>
        </div>
    </nav>
</header>
@include('include.community.sidebar')
