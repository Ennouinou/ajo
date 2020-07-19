<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>AJO</title>

    <link rel="shortcut icon" href="{{URL::to('/')}}/assets/images/ajo-favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/main.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/app/css/main.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9] -->
    <script src="{{URL::to('/')}}/assets/js/html5shiv.js"></script>
    <script src="{{URL::to('/')}}/assets/js/respond.min.js"></script>
    <script src="{{URL::to('/')}}/assets/app/js/main.js"></script>
    <![endif]-->
</head>
<body class="home">

@include('skeleton.header')

{{-- Content --}}
    <span>
        @yield('content')
    </span>
{{-- Space --}}
    <section id="social">
        <div class="container">
            <div class="wrapper clearfix">
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_tweet"></a>
                    <a class="addthis_button_linkedin_counter"></a>
                    <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
                </div>
                <!-- AddThis Button END -->
            </div>
        </div>
    </section>
@include('skeleton.footer')

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/headroom.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/jQuery.headroom.min.js"></script>
<script src="{{URL::to('/')}}/assets/js/template.js"></script>
</body>
</html>
