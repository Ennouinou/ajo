@extends('layout')
@section('content')
    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead" >Association des Jeunes de L'ouverture - جمعية شباب الإنفتاح </h1>
                <p class="tagline"> Organisation à but non lucratif </p>
                <p><a class="btn bg-purple orange index-image-button"  role="button">Qui sommes-nous ?</a> <a class="btn bg-purple blue  index-image-button" role="button">Aidez-Nous</a></p>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Intro -->
    <div class="container text-center">
        <br> <br>
        <h2 class="thin"><span class="purple">A</span><span class="blue">J</span><span class="orange">O</span></h2>
        <p class="text-muted">
            Association fondée dans le but d'améliorer tout travail associatif, artistique culturel et social en guise de venir en aide à tous les jeunes.
        </p>
    </div>
    <!-- /Intro-->

    <!-- Highlights - jumbotron -->
    <div class="jumbotron top-space">
        <div class="container">

            <h3 class="text-center thin orange">Principes :</h3>

            <div class="row">
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Créativité</h4></div>
                    <div class="h-body text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aliquid adipisci aspernatur. Soluta quisquam dignissimos earum quasi voluptate. Amet, dignissimos, tenetur vitae dolor quam iusto assumenda hic reprehenderit?</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Energie</h4></div>
                    <div class="h-body text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, commodi, sequi quis ad fugit omnis cumque a libero error nesciunt molestiae repellat quos perferendis numquam quibusdam rerum repellendus laboriosam reprehenderit! </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Amour</h4></div>
                    <div class="h-body text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, vitae, perferendis, perspiciatis nobis voluptate quod illum soluta minima ipsam ratione quia numquam eveniet eum reprehenderit dolorem dicta nesciunt corporis?</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Sourire</h4></div>
                    <div class="h-body text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, excepturi, maiores, dolorem quasi reprehenderit illo accusamus nulla minima repudiandae quas ducimus reiciendis odio sequi atque temporibus facere corporis eos expedita? </p>
                    </div>
                </div>
            </div> <!-- /row  -->

        </div>
    </div>
    <!-- /Highlights -->

    <!-- container -->
    <div class="container">
        <h2 class="text-center top-space orange">Nos activités généralement tournent autour des :</h2>
        <br>
        <div class="row">
            <div class="col-sm-6">
                <h3 class="blue">Formations</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, iste, veritatis! Accusamus aliquam, cumque esse eveniet in minus, nemo officia omnis possimus quidem recusandae saepe sequi sit suscipit unde vitae?
                </p>
            </div>
            <div class="col-sm-6">
                <h3 class="purple">Activités Sociales</h3>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda, beatae blanditiis consequuntur culpa dolores earum eius esse ex exercitationem explicabo labore, libero mollitia perferendis quo repellendus similique ut veniam.
                </p>
            </div>
        </div> <!-- /row -->
        <div class="row">
            <div class="col-sm-6">
                <h3 class="blue">Activités Cultureles</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem beatae, debitis eaque est fuga laboriosam magnam natus necessitatibus nulla porro, praesentium quo, ratione reiciendis sapiente totam ut vel! Delectus, qui.
                </p>
            </div>
            <div class="col-sm-6">
                <h3 class="purple">Activité Artistiques</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at dolore eius expedita laborum pariatur qui temporibus ut velit? Accusantium beatae dicta distinctio ipsum libero odit quia rem temporibus vitae.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="page-header">
                <h1 id="timeline" class="orange text-center">Coming Soon</h1>
            </div>
            <ul class="timeline">
            @foreach($events as $event)
                    <li class="{{$loop->index%2 == 0 ? '' : 'timeline-inverted'}}">
                        <div class="timeline-badge" style="background-color: rgb(150, 27, 129)"></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title">{{ $event->title }}</h4>
                                <p><small class="text-muted"><i class="fa fa-calendar"></i> &nbsp {{ $event->date }} </small></p>
                            </div>
                            <div class="timeline-body">
                                <p>{{$event->description}}</p>
                            </div>
                        </div>
                    </li>
            @endforeach
                <li>
                    <div class="timeline-badge danger"><i class="fa fa-plus"></i></div>
                </li>
            </ul>
        </div>
        <div class="jumbotron top-space">
            <h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
            <p class="text-right"><a class="btn bg-purple orange index-image-button">Details »</a></p>
        </div>
    </div>	<!-- /container -->

@endsection
