@extends('dashboard.layout')
@section('content')
    <div class="card mt-4">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
            <h4 class="card-title text-center">Ajouter Un article</h4>
            <hr>
            <form method="POST" action="{{route('dashboard.posts.store')}}" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend>Article : </legend>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input class="form-control" type="text" id="title" name="title"
                               value="{{ old('title',$post->title ?? null) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" type="text" name="description" id="description" required>
                            {{old('content',$post->description ?? null)}}
                    </textarea>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Evenement :</legend>
                    <div class="form-group">
                        Cet article a-t-il une relation avec un événement ? :
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
                </fieldset>
                <fieldset>
                    <legend>Atachements :</legend>
                    <div class="form-group">
                        <label for="videos">
                            Videos : <a class="btn btn-primary mt-1" onclick="createVideoInput()"><i class="fa fa-plus"></i></a>
                        </label>
                        <span id="videos">
                    </span>
                    </div>
                    <div class="form-group">
                        <label for="attachments">
                            Images :<a class="btn btn-primary mt-1"><i class="fa fa-plus"></i></a>
                        </label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div>
                </fieldset>

                @if ($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <button type="submit" class="btn btn-block btn-primary">Add Post</button>
            </form>
        </div>
    </div>
@endsection
