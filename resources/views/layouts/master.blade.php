<!doctype html>
<html lang="en-US">

<head>
    @php
     use Carbon\Carbon;
        $activeClass = 'active';
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
    <title>{{$pageTitle}}</title>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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


</body>

</html>
