<!doctype html>
<html lang="en-US">

<head>
    @php
     use Carbon\Carbon;
        $activeClass = 'active';
<<<<<<< HEAD
        $pageTitle = '';
        $path = request()->path();

    @endphp
     

    @if (Request::is('superadmin/dashboard'))
        @php $pageTitle = 'Dashboard'; @endphp
    @elseif (preg_match('/^superadmin\/(.*township-Page|township-admin-Page.*|township-emergency-Page.*)/', $path))
        @php $pageTitle = 'Township'; @endphp    
    @elseif (preg_match('/^superadmin\/(.*-resident|resident-.*)/', $path))
        @php $pageTitle = 'Resident'; @endphp
    @elseif (preg_match('/^superadmin\/(.*user-listing|user-edit.*)/', $path))
         @php $pageTitle = 'User'; @endphp
    @elseif (preg_match('/^superadmin\/(.*-complaint|complaint-.*)/', $path))
        @php $pageTitle = 'Complaint'; @endphp
    @elseif (preg_match('/^superadmin\/(.*-document|document-.*)/', $path))
        @php $pageTitle = 'Document'; @endphp
    @elseif (preg_match('/^superadmin\/(.*staff-page|staff-page.*)/', $path))
        @php $pageTitle = 'Service Facility'; @endphp
    @elseif (preg_match('/^superadmin\/(.*notice-page|notice-page.*)/', $path))
        @php $pageTitle = 'Notices'; @endphp
    @elseif (preg_match('/^superadmin\/(.*announcement-page|announcement-page.*)/', $path))
        @php $pageTitle = 'Announcements'; @endphp
    @elseif (preg_match('/^superadmin\/(.*setting-Page|setting-admin-Page.*|setting-emergency-Page.*)/', $path))
        @php $pageTitle = 'Settings'; @endphp
    @elseif (preg_match('/^superadmin\/(.*profile-page|profile-page.*)/', $path))
        @php $pageTitle = 'Profile Setting'; @endphp
    @endif
=======
        $pageTitle = 'optical';
    @endphp
    
>>>>>>> ccccc77b92da5d1f4d053cc7af651a9658bc914c
    <title>{{$pageTitle}}</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<<<<<<< HEAD
    <link rel="apple-touch-icon" href="{{ asset('public/superadmin/img/fevi.ico?' . time()) }}">
    <link rel="icon" type="image/png" href="{{ asset('public/superadmin/img/fevi.ico?' . time()) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/superadmin/css/bootstrap.min.css?' . time()) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/superadmin/css/simple-calendar.css?' . time()) }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/superadmin/css/font-awesome.min.css?' . time()) }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('public/superadmin/css/style.css?' . time()) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="{{ asset('public/superadmin/js/jquery-3.6.0.min.js?' . time()) }}"></script>
    <script src="{{ asset('public/superadmin/js/bootstrap.bundle.min.js?' . time()) }}"></script>
    @stack('head-style')
</head>
<body>
    <div class="page-wrapper">
   
            
        @yield('content')
    </div>
    <script> </script>
    @stack('footer-script')

=======
    <link rel="apple-touch-icon" href="{{ asset('/assets/img/fevi.ico?' . time()) }}">
    <link rel="icon" type="image/png" href="{{ asset('/assets/img/fevi.ico?' . time()) }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/bootstrap.min.css?' . time()) }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/simple-calendar.css?' . time()) }}"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/style.css?' . time()) }}">
    
    <script src="{{ asset('/assets/js/jquery-3.6.0.min.js?' . time()) }}"></script>
    <script src="{{ asset('/assets/js/bootstrap.bundle.min.js?' . time()) }}"></script>
    @stack('head-style')
</head>
<body>

    <div class="page-wrapper">
       @yield('content')
    </div>

    @stack('footer-script')
>>>>>>> ccccc77b92da5d1f4d053cc7af651a9658bc914c

</body>

</html>
