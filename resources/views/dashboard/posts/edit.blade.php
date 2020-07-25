@extends('dashboard.layout')
@section('content')
    <div class="card mt-4">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title text-center">Ajouter Un article</h4>
            <hr>
            <form method="POST" action="{{route('dashboard.posts.update',['post'=>$post->id])}}" >
                @csrf
                @method('PUT')
                @include('dashboard.posts.form')
                @if ($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <button type="submit" class="btn btn-block btn-warning">Edit Post</button>
            </form>
        </div>
    </div>
@endsection
