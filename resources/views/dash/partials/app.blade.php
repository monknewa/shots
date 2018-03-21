<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Omkar Toner Suppliers</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M"
          crossorigin="anonymous">

    {{--<link rel="stylesheet" href="/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="/css/dash/dataTables.bootstrap4.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/css/dash/style.green.css" id="theme-stylesheet">
    <!-- jQuery Circle-->

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>    <!-- Custom stylesheet - for your changes-->
    <!-- Favicon-->
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <style>
        body{
            background: #F4F7FA;
        }
        nav.side-navbar .sidenav-header img{
            width: 150px;
            height: 150px;
        }
    </style>

</head>
<body>
<!-- Side Navbar -->
@include('dash.partials.nav')

<div class="page forms-page">
    <!-- navbar-->
@include('dash.partials.header')

<!-- Counts Section -->
    <div class="container" style="margin: 20px 30px 0">
        @yield('content')
    </div>

</div>
<!-- Javascript files-->
@include('dash.partials.footer')


<script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        }
    );

</script>

@yield('scripts')


</body>
</html>