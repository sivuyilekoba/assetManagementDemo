<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                {{-- <img src="/public/dist/img/pic1.jpg" class="img-circle" alt="User Image"> --}}
                <img src="{{ asset('dist/img/pic1.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }} {{ Auth::user()->surname }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li><a href="/dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

            <li class="treeview {{ request()->segment(1) == 'Admin' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Administration</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/CommunityAdmin"><i class="fa fa-circle-o"></i>My Activity Logs</a></li>
                    {{-- @if (request()->session()->get('user_type') == 'Admin') --}}
                    <li><a href="/CommunityAdmin/all"><i class="fa fa-circle-o"></i>All Activity Logs</a></li>
                    {{-- @endif --}}
                </ul>
            </li>

            <li class="treeview {{ request()->segment(1) == 'Community' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    <span>Community Infrastructure</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/Community"><i class="fa fa-circle-o"></i> Asset Management</a></li>
                </ul>
            </li>

            <li class="treeview {{ request()->segment(1) == 'CommunityAssessment' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    <span>Asset Assessments</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/CommunityAssessment/today"><i class="fa fa-circle-o"></i> Today's Assessments</a>
                    </li>
                    <li><a href="/CommunityAssessment"><i class="fa fa-circle-o"></i> Upcoming Assessments</a></li>
                    <li><a href="/CommunityAssessment/completed"><i class="fa fa-circle-o"></i> Completed
                            Assessments</a></li>
                    <li><a href="/CommunityAssessment/incompleted"><i class="fa fa-circle-o"></i> Incomplete
                            Assessments</a></li>
                    <li><a href="/CommunityAssessment/signed"><i class="fa fa-circle-o"></i> Assessments To Sign</a>
                    </li>
                </ul>
            </li>


            <li class="treeview {{ request()->segment(1) == 'CommunityAssessor' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    {{-- <span>Zoo, Marine and <br>Non-biological Animals </span> --}}
                    <span>Assessors</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li><a href="/CommunityAssessor/create"><i class="fa fa-circle-o"></i> Add Assessors</a>
                    </li>

                    <li><a href="/CommunityAssessor"><i class="fa fa-circle-o"></i> Assessors Management</a></li>
                </ul>
            </li>


            <li
                class="treeview {{ request()->segment(2) == 'generator' ? 'active' : '' }} {{ request()->segment(2) == 'report' ? 'active' : '' }} {{ request()->segment(2) == 'stats2' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-folder"></i>
                    <span>Reports</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    {{-- @if (request()->session()->get('user_type') == 'Admin') --}}
                    <li><a href="/CommunityInfo/generator"><i class="fa fa-circle-o"></i>Assessment Reports</a></li>
                    <li><a href="/CommunityInfo/stats2"><i class="fa fa-circle-o"></i>Condition Rating</a></li>
                    {{-- @endif            --}}
                </ul>
            </li>

            {{-- @if (request()->session()->get('user_type') == 'Admin') --}}
            <li class="treeview {{ request()->segment(2) == 'stats' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Geography</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/CommunityInfo/stats/1"><i class="fa fa-circle-o"></i>GIS</a></li>
                </ul>
            </li>
            {{-- @endif --}}

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Legal</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Terms & Conditions</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Privacy Policy</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Tutorial</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Help Centre</a></li>

                </ul>
            </li>
            <li class="treeview">
                <a href="/">
                    <i class="fa fa-th-large"></i> <span>Switch Modules</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

            </li>
            <li><a href="/logout"><i class="fa fa-circle-o text-red"></i> <span>Logout</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
