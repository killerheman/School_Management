<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.include.head')
</head>

<body onload="startTime()">
    <div class="loader-wrapper">
        <div class="loader-index"><span></span></div>
        <svg>
            <defs></defs>
            <filter id="goo">
                <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                </fecolormatrix>
            </filter>
        </svg>
    </div>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('admin.include.topbar')
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('admin.include.sidebar')
            <!-- Page Sidebar Ends-->
            <div class="page-body">

                @yield('content')

            </div>
            <!-- footer start-->
            @include('admin.include.footer')
        </div>
    </div>
    @include('admin.include.foot')

    @if (Session::has('msg'))
        <script>
            $.notify({
                title: 'Notification',
                message: "{!! session::get('msg') !!}"
            }, {
                type: 'primary',
                allow_dismiss: true,
                mouse_over: true,
                showProgressbar: true,
                spacing: 10,
                timer: 2000,
                placement: {
                    from: 'top',
                    align: 'right'
                },
                offset: {
                    x: 30,
                    y: 30
                },
                delay: 1000,
                z_index: 10000,
                animate: {
                    enter: 'animated slideInRight',
                    exit: 'animated slideOutRight'
                }
            });
        </script>
    @endif

    @yield('script')


</body>

</html>
