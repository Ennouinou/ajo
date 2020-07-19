@extends('layout')
@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.blade.php">Events</a></li>
            <li class="active">{{$event->title}}</li>
        </ol>

        <div class="row">
            <aside class="col-md-4 sidebar sidebar-left">
                <div class="row widget">
                    <div class="col-xs-12">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione delectus reiciendis nulla nisi pariatur molestias animi eos repellat? Vel.</p>
                    </div>
                </div>
                <div class="row widget">
                    <div class="col-xs-12">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p><img src="{{URL::to('/')}}/assets/images/1.jpg" alt=""></p>
                    </div>
                </div>
                <div class="row widget">
                    <div class="col-xs-12">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p><img src="{{URL::to('/')}}/assets/images/2.jpg" alt=""></p>
                        <p>Qui, debitis, ad, neque reprehenderit laborum soluta dolor voluptate eligendi enim consequuntur eveniet recusandae rerum? Atque eos corporis provident tenetur.</p>
                    </div>
                </div>

            </aside>
            <!-- /Sidebar -->

            <!-- Article main content -->
            <article class="col-md-8 maincontent">
                <header class="page-header">
                    <h1 class="page-title">{{$event->title}}</h1>
                </header>
                <p>{{$event->description}}</p>
            </article>
            <!-- /Article -->

        </div>
    </div>	<!-- /container -->
@endsection
