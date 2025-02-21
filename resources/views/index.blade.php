@extends('layout')
@section('content')
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead" >Association des Jeunes de L'ouverture - جمعية شباب الإنفتاح </h1>
                <p class="tagline"> Organisation à but non lucratif </p>
                <p><a class="btn bg-purple orange index-image-button"  role="button">Rejoignez nous ?</a> <a class="btn bg-purple blue  index-image-button" role="button">Aidez-Nous</a></p>
            </div>
        </div>
    </header>
    <div class="container text-center">
        <br>
        <div class="row">
                <h2 class="thin"><span class="purple">A</span><span class="blue">J</span><span class="orange">O</span></h2>
                <p class="text-muted">
                    Association fondée dans le but d'améliorer tout travail associatif, artistique culturel et social en guise de venir en aide à tous les jeunes.
                </p>
                <iframe width="80%" height="400" src="https://www.youtube.com/embed/hYDrPVbNxWM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="row">
            <h2 class="thin orange">Dernières Actualités</h2>
            <div id="myCarousel" class="carousel slide news-carousel"  data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($posts as $post)
                        <li data-target="#myCarousel" data-slide-to="{{$loop->index}}" class="active"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                   @foreach($posts as $post)
                        <div class="item {{$loop->index == 0 ? 'active' : ''}} text-center" >
                            <?php $image = true ?>
                        @foreach($post->attachments as $attachment)
                                @if($attachment->type == 'f')
                                    <?php $image = false ?>
                                    <img class="card-img-top center-image-en" style="opacity: 0.6" src="/assets/images/posts/{{$attachment->value}}" alt="">
                                    @break
                                @endif
                            @endforeach
                            @if ($image)
                                <img class="card-img-top center-image-en" style="opacity: 0.6" src="/assets/images/logo.png" alt="">
                            @endif
                            <div class="carousel-caption" style="background-color: rgba(255,255,255,0.4);">
                                <h3 class="blue " style="cursor: pointer" onclick="route('/posts/{{$post->id}}')"> {{$post->title}}</h3>
                                <p class="orange">{{substr($post->description,0,50)}}</p>
                            </div>
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
        </div>
    </div>
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
            </div>
        </div>
    </div>
    <div class="container ">
        <h2 class="text-center top-space orange">Nos activités généralement tournent autour des :</h2>
        <br>
        <div class="row" style="margin-bottom: 10px;">
            <div class="col-sm-6">
                <div class="my-fieldset">
                    <h3 class="blue text-center">Formations</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, iste, veritatis! Accusamus aliquam, cumque esse eveniet in minus, nemo officia omnis possimus quidem recusandae saepe sequi sit suscipit unde vitae?
                    </p>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="my-fieldset">
                    <h3 class="purple text-center">Activités Sociales</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto assumenda, beatae blanditiis consequuntur culpa dolores earum eius esse ex exercitationem explicabo labore, libero mollitia perferendis quo repellendus similique ut veniam.
                    </p>
                </div>
            </div>
        </div> <!-- /row -->
        <div class="row">
            <div class="col-sm-6">
                <div class="my-fieldset">
                    <h3 class="blue text-center">Activités Cultureles</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem beatae, debitis eaque est fuga laboriosam magnam natus necessitatibus nulla porro, praesentium quo, ratione reiciendis sapiente totam ut vel! Delectus, qui.
                    </p>
                </div>

            </div>
            <div class="col-sm-6 ">
                <div class="my-fieldset">
                    <h3 class="purple text-center">Activité Artistiques</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at dolore eius expedita laborum pariatur qui temporibus ut velit? Accusantium beatae dicta distinctio ipsum libero odit quia rem temporibus vitae.
                    </p>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="page-header">
                <h1 id="timeline" class="orange text-center">Coming Soon</h1>
            </div>
            <ul class="timeline">
            @foreach($events as $event)
                    <li class="{{$loop->index%2 == 0 ? '' : 'timeline-inverted'}}">
                        <div class="timeline-badge" ><img src="/assets/images/mini-logo.png" alt=""></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4 class="timeline-title orange blink_me" onclick="route('/events/{{$event->id}}')" style="cursor: pointer">{{ $event->title }}</h4>
                                <p><small class="text-muted"><i class="fa fa-calendar"></i> &nbsp {{ $event->date }} </small></p>
                            </div>
                            <div class="timeline-body">
                                <p>{{substr($event->description,0,300)}}...</p>
                            </div>
                        </div>
                    </li>
            @endforeach
                <li>
                    <div class="timeline-badge  more-events" onclick="route('/events')"><i class="fa fa-plus"></i></div>
                </li>
            </ul>
        </div>
        <div class="jumbotron top-space douich">
            <img  src="/assets/images/douich.jpg" alt="">
            <blockquote class="quote"> <i class="fa fa-quote-left blue"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. A assumenda at, cupiditate dolorem explicabo id unde. A alias blanditiis, ea eaque et explicabo iusto nemo nesciunt nihil sint vel voluptas?</blockquote>
            <p class="text-right"><a class="btn bg-purple orange index-image-button">Membres du bureau »</a></p>
        </div>
            <div class="row">
                <br/>
                <div class="col text-center">
                    <h2><span class="purple">A</span><span class="blue">J</span><span class="orange">O</span> en chiffres</h2>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="counter">
                        <i class="fa fa-code fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="100" data-speed="1500"></h2>
                        <p class="count-text ">Familles</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter">
                        <i class="fa fa-users fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="1700" data-speed="1500"></h2>
                        <p class="count-text ">Membres</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="counter">
                        <i class="fa fa-calendar-o fa-2x"></i>
                        <h2 class="timer count-title count-number" data-to="11900" data-speed="1500"></h2>
                        <p class="count-text ">Evenements</p>
                    </div>
                </div>
            </div>
        </div>
@endsection
