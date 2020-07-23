@extends('layout')
@section('content')

    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.blade.php">Actualités</a></li>
            <li class="active">Toutes les actualités</li>
        </ol>
        <br>
    @foreach($posts as $post)
            <div class="card col-md-4 col-xs-10">
                <img class="card-img-top" src="assets/images/logo.png" alt="">
                <div class="card-body">
                    <h4 class="card-title blue text-center">{{$post->title}} <br>  <br>
                        <div class=" text-center small ">
                            <i class="fa fa-pencil"></i> {{$post->user->name}} || <i class="fa fa-calendar"></i> {{$post->created_at}}
                        </div>
                    </h4>
                    <p class="card-text">{{$post->description}}</p>
                    <p class="text-right">
                       <a href="{{ route('posts.show',['post'=>$post->id])}}" class="btn bg-purple orange"> Details >></a>
                    </p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
