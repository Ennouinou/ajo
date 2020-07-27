@extends('dashboard.layout')
@section('content')
    <div class="card mt-4 article" >
        <div class="card-body">
            <h4 class="card-title text-center orange">Ajouter Un Article</h4>
            <hr>
            <form method="POST" action="{{route('dashboard.posts.store')}}" enctype="multipart/form-data">
                @csrf
                @include('dashboard.posts.form')
                <div class="my-fieldset bgwo mt-4">
                    <legend class="purple">Atachements :</legend>
                    <div class="form-group d-flex">
                        <div class="col-md-6">
                            <label for="videos" >
                                <span class="blue"> Videos :</span> <a class="btn btn-primary mt-1 bg-blue" onclick="createVideoInput()" ><i class="fa fa-plus "></i></a>
                            </label>
                            <span id="videos"></span>
                        </div>
                        <div class="col-md-6">
                            <label for="attachments" >
                                <span class="blue">Images :</span> <a class="btn btn-primary mt-1 bg-blue" onclick="createImageInput()"><i class="fa fa-plus"></i></a>
                            </label>
                            <span id="images"></span>
                        </div>
                    </div>
                </div>
                <div class="my-fieldset mt-4 mb-4 bgwo">
                    <legend class="purple">Evenement :</legend>
                    <div class="form-group">
                        Cet article a-t-il une relation avec un événement ? :
                        <label class="radio-inline " onclick="displayEventChoice(false)"><input type="radio" name="optradio" checked >&nbsp NON</label>
                        <label class="radio-inline " onclick="displayEventChoice(true)"><input type="radio" name="optradio" >&nbspOui</label>
                    </div>
                    <div class="form-group " id="event-choice" style="display: none;">
                        <label for="sel1" class="blue">Choisissez Un événement:</label>
                        <select class="form-control" id="events"  name="events">
                            <option value="NULL"></option>
                            @foreach($events as $event)
                                <option value="{{$event->id}}">{{$event->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-block btn-primary">Ajouter Actualité</button>
            </form>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small  orange">Actualité écrite par : {{Auth::user()->name}}</a>
            <div class="small orange">Le : {{now()}}</div>
        </div>
    </div>
@endsection
