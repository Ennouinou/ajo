@extends('layout')
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="/posts">Actualités</a></li>
            <li class="active">{{$post->title}}</li>
        </ol>
        <div class="row">
            <aside class="col-md-4 sidebar sidebar-left">
                <div class="row widget">
                    <div class="col-xs-12">
                        <h4 class="small blue">&nbsp;<i class="fa fa-pencil"></i> Ecrit par : {{$post->user->name}} |  <i class="fa fa-calendar"></i> &nbsp; Le {{$post->created_at}}</h4>
                    </div>
                </div>
                @foreach($videos as $video)
                    <div class="row widget">
                        <div class="col-xs-12">
                            <p>
                                <iframe src="{{$video->value}}" width="100%" height="300" src="https://www.youtube.com/embed/_IDoz-ZFkrE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </p>
                        </div>
                    </div>
                @endforeach
            </aside>
            <!-- /Sidebar -->

            <!-- Article main content -->
            <article class="col-md-8 maincontent">
                <header class="page-header">
                    <p class="text-right">
                        <img src="{{URL::to('/')}}/assets/images/mini-logo.png" alt="">
                    </p>
                    <h1 class="page-title orange">{{$post->title}}</h1>
                </header>
                <p style="padding: 10px ;  border-left: 1px solid lightgray">{{$post->description}}</p>
                @if ($pictures->count() > 0)
                    <div id="myCarousel" class="carousel slide my-carousel"  data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            @foreach($pictures as $picture)
                                <li data-target="#myCarousel" data-slide-to="{{$loop->index}}" class="active"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($pictures as $picture)
                                <div class="item {{$loop->index == 0 ? 'active' : ''}} text-center" >
                                    <img  style="max-height: 650px;" src="{{URL::to('/')}}/assets/images/posts/{{$picture->value}}" alt="Image" >
                                </div>
                            @endforeach
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="fa fa-chevron-left" style="margin-top: 50%;"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="fa fa-chevron-right" style="margin-top: 50%;"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                @endif

            </article>
            <!-- /Article -->

        </div>
    </div>	<!-- /container -->
@endsection
