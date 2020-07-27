@extends('dashboard.layout')
@section('content')
    <div class="card mt-4 article">
        <div class="card-body">
            <h4 class="card-title text-center">Modifier Cet Article</h4>
            <hr>
            <form method="POST" action="{{route('dashboard.posts.update',['post'=>$post->id])}}" >
                @csrf
                @method('PUT')
                @include('dashboard.posts.form')
                <button type="submit" class="btn btn-block btn-warning">Edit Post</button>
            </form>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between bgwo ">
            <span class="small stretched-link orange" >Actualité écrite par : {{$post->user->name}}</span>
            <div class="small orange">Le : {{$post->created_at}}</div>
        </div>
    </div>
@endsection
