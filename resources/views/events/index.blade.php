@extends('layout')
@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.blade.php">Evenements</a></li>
            <li class="active">Tous les évenements</li>
        </ol>
        <br>
    @foreach($events as $event)
            <div class="card col-md-4 col-xs-10">
                <img class="card-img-top" src="assets/images/logo.png" alt="">
                <div class="card-body">
                    <h4 class="card-title blue text-center">{{$event->title}}  <span class="small"> <i class="fa fa-check"></i>{{$event->activity}} </span> <br>  <br><div class=" text-right small "> <i class="fa fa-calendar"></i> {{$event->date}}</div></h4>
                    <p class="card-text">{{$event->description}}</p>
                    <p class="text-right">
                       <a href="{{ route('events.show',['event'=>$event->id])}}" class="btn bg-purple orange"> Details >></a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
