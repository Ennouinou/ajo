@extends('dashboard.layout')
@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Liste des articles</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header" onclick="route('posts/create')" style="cursor: pointer">
            <i class="fas fa-table mr-1"></i> Ajouter Un Article
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Details</th>
                        <th>Evénement</th>
                        <th>Auteur</th>
                        <th>Date</th>
                        @if (Auth::user()->role == 1)
                            <th>Action</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            @if ($post->event != null)
                                <td>{{$post->event->title}}</td>
                             @else
                                <td>____</td>
                            @endif
                            <td>{{$post->user->name}}</td>
                            <td>{{$post->created_at}}</td>
                            @if (Auth::user()->role == 1)
                                <td width="15%" class="text-center">
                                    <a class="btn btn-warning" href="{{route('dashboard.posts.edit',['post'=>$post->id])}}"><i class="fa fa-edit"></i></a>
                                    <form class="d-inline" method="POST" action="{{route('dashboard.posts.destroy',['post'=>$post->id])}}" >
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('You sure about this ?')"><i class="fa fa-trash"></i></button>
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
