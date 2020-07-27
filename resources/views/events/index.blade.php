@extends('layout')
@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.blade.php">Evenements</a></li>
            <li class="active">Tous les évenements</li>
        </ol>
        <br>
    @foreach($events as $event)
            <div class="card col-md-4 col-xs-10" style="min-height: 500px;">
                <?php $image = true ?>
                @foreach($event->attachments as $attachment)
                    @if($attachment->type == 'f')
                        <?php $image = false ?>
                        <img class="card-img-top center-image-en"  src="{{URL::to('/')}}/assets/images/events/{{$attachment->value}}" alt="">
                        @break
                    @endif
                @endforeach
                @if ($image)
                    <img class="card-img-top center-image-en"  src="{{URL::to('/')}}/assets/images/logo.png" alt="">
                @endif
                <div class="card-body">
                    <h4 class="card-title blue text-center">{{$event->title}}  <br>  <br>
                        <div class=" text-center small "> <i class="fa fa-check"></i>{{$event->activity}}  || <i class="fa fa-calendar"></i>   {{$event->date}}</div>
                    </h4>
                    <p class="card-text">{{substr($event->description,0,150)}}...</p>
                    <p class="text-right">
                       <a href="{{ route('events.show',['event'=>$event->id])}}" class="btn bg-purple orange"> Details >></a>
                    </p>
                </div>
            </div>
        @endforeach
        <div  class="text-center">
            {{$events->links()}}
        </div>
    </div>
@endsection
