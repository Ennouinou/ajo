@extends('dashboard.layout')
@section('content')
    <div class="card mt-4">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title text-center">Ajouter Un article</h4>
            <hr>
            <form method="POST" action="{{route('dashboard.posts.store')}}">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input class="form-control" type="text" id="title" name="title"
                           value="{{ old('title',$post->title ?? null) }}" required>
                </div>
                <div class="form-group">
                    <label for="content">Description:</label>
                    <textarea class="form-control" type="text" name="description" id="description" required>
                            {{old('content',$post->description ?? null)}}
                        </textarea>
                </div>
                <div class="form-group">
                    Cet article a-t-il une relation avec un événement :
                    <label class="radio-inline" onclick="displayEventChoice(false)"><input type="radio" name="optradio" checked >&nbsp NON</label>
                    <label class="radio-inline" onclick="displayEventChoice(true)"><input type="radio" name="optradio" >&nbspOui</label>
                </div>
                <div class="form-group " id="event-choice" style="display: none;">
                    <label for="sel1">Choisissez Un événement:</label>
                    <select class="form-control" id="events"  name="events">
                            <option value="NULL"></option>
                    @foreach($events as $event)
                            <option value="{{$event->id}}">{{$event->title}}</option>
                       @endforeach
                    </select>
                </div>
                @if ($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <button type="submit" class="btn btn-block btn-primary">Add Post</button>
            </form>
        </div>
    </div>
@endsection
