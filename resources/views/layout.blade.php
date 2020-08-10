<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>AJO</title>

    <link rel="shortcut icon" href="/assets/images/ajo-favicon.png">
    <link rel="stylesheet" media="screen" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="/assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="/assets/css/main.css">
    <link rel="stylesheet" href="/assets/app/css/main.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9] -->
    <script src="/assets/js/html5shiv.js"></script>
    <script src="/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="home" onload="menuChange()">

@include('skeleton.header')

{{-- Content --}}
    <span>
        @yield('content')
    </span>

@include('skeleton.footer')

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="/assets/js/headroom.min.js"></script>
<script src="/assets/js/jQuery.headroom.min.js"></script>
<script src="/assets/js/template.js"></script>
<script src="/assets/app/js/main.js"></script>
<script src="/assets/app/js/counter.js"></script>

</body>
</html>
