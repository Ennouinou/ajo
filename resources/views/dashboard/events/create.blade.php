@extends('dashboard.layout')
@section('content')
    <div class="card mt-4 article" >
        <div class="card-body">
            <h4 class="card-title text-center orange">Ajouter Un Evénement</h4>
            <hr>
            <form method="POST" action="{{route('dashboard.posts.store')}}" enctype="multipart/form-data">
                @csrf
                @include('dashboard.events.form')
                <div class="my-fieldset mt-4 bgwo">
                    <legend class="purple">Atachements :</legend>
                    <div class="form-group col-md-6">
                        <label for="videos" >
                            <span class="blue"> Videos :</span> <a class="btn btn-primary mt-1 bg-blue" onclick="createVideoInput()" ><i class="fa fa-plus "></i></a>
                        </label>
                        <span id="videos">
                        </span>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="attachments" >
                           <span class="blue">Images :</span> <a class="btn btn-primary mt-1 bg-blue" onclick="createImageInput()"><i class="fa fa-plus"></i></a>
                        </label>
                        <span id="images">
                        </span>
                    </div>
                </div>

                @if ($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <button type="submit" class="btn btn-block btn-primary">Ajouter Evenement</button>
            </form>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between">
            <a class="small  orange">AJO</a>
            <div class="small orange">Le : {{now()}}</div>
        </div>
    </div>
@endsection
