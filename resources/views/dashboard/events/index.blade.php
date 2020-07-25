@extends('dashboard.layout')
@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Liste des Evénements</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header" onclick="route('events/create')" style="cursor: pointer">
            <i class="fas fa-table mr-1"></i> Ajouter Un Evénement
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Details</th>
                        <th>Activity</th>
                        <th>Date</th>
                        @if (Auth::user()->role == 1)
                            <th>Action</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td>{{$event->title}}</td>
                            <td>{{$event->description}}</td>
                            <td>{{$event->activity}}</td>
                            <td>{{$event->date}}</td>
                            @if (Auth::user()->role == 1)
                                <td width="15%" class="text-center">
                                    <a class="btn btn-warning" href="{{route('dashboard.events.edit',['event'=>$event->id])}}"><i class="fa fa-edit"></i></a>
                                    <form class="d-inline" method="event" action="{{route('dashboard.events.destroy',['event'=>$event->id])}}" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="confirm('You sure about this ?')"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
