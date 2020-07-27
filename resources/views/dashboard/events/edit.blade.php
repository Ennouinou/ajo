@extends('dashboard.layout')
@section('content')
    <div class="card mt-4 article">
        <div class="card-body">
            <h4 class="card-title text-center">Modifier Cet Evénement</h4>
            <hr>
            <form method="POST" action="{{route('dashboard.events.update',['event'=>$event->id])}}" >
                @csrf
                @method('PUT')
                @include('dashboard.events.form')
                <button type="submit" class="btn btn-block btn-warning mt-4">Modifier Cet Evenement</button>
            </form>
        </div>
        <div class="card-footer d-flex align-items-center justify-content-between bgwo ">
            <div class="small orange">Evénement aura lieu Le : {{$event->date}}</div>
        </div>
    </div>
@endsection
