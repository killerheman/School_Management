<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light"
                    src="{{ asset('adminasset/assets/images/logo/logo.png') }}" alt=""><img class="img-fluid for-dark"
                    src="{{ asset('adminasset/assets/images/logo/logo_dark.png') }}" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="{{ asset('adminasset/assets/images/logo/logo-icon.png') }}" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                src="{{ asset('adminasset/assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="{{ route('admin.dashboard') }}"><i
                                data-feather="home"></i><span class="lan-3">Dashboard </span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                data-feather="users"></i><span>Students</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.enrollstudent') }}">Enroll Student</a></li>
                            <li><a href="{{ route('admin.allstudents') }}">All Students</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                        data-feather="users"></i><span>Teachers</span></a>
                <ul class="sidebar-submenu">
                    <li><a href="{{ route('admin.enrollteacher') }}">Enroll Teacher</a></li>
                    <li><a href="{{ route('admin.allteachers') }}">All Teachers</a></li>
                </ul>
            </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                data-feather="users"></i><span>Fee Managament</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.feemaster') }}">Academic Master</a></li>
                            <li><a href="{{ route('admin.studentfee') }}">Academic Fee</a></li>
                            <li><a href="{{ route('admin.transportfeemaster') }}">Transport Master</a></li>
                            <li><a href="{{ route('admin.transportfee') }}">Transport Fee</a></li>
                        </ul>

                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i
                                data-feather="users"></i><span>Setup</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.class') }}">Classes</a></li>
                            <li><a href="{{ route('admin.section') }}">Sections</a></li>
                            <li><a href="{{ route('admin.session') }}">Session</a></li>
                            <li><a href="{{ route('admin.month') }}">Month</a></li>
                            <li><a href="{{ route('admin.feetype') }}">Fee Type</a></li>
                            <li><a href="{{ route('admin.transportlocation') }}">Transport Location</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
