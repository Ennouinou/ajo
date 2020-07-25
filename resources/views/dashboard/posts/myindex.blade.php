@extends('dashboard.layout')
@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Mes articles</li>
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
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td width="10%">{{$post->title}}</td>
                            <td width="30%">{{$post->description}}</td>
                            @if ($post->event != null)
                                <td width="10%">{{$post->event->title}}</td>
                            @else
                                <td width="10%">____</td>
                            @endif
                            <td width="20%">{{$post->user->name}}</td>
                            <td width="15%">{{$post->created_at}}</td>
                            <td width="15%" class="text-center">
                                <a class="btn btn-warning" href="{{route('dashboard.posts.edit',['post'=>$post->id])}}"><i class="fa fa-edit"></i></a>
                                <form class="d-inline" method="POST" action="{{route('dashboard.posts.destroy',['post'=>$post->id])}}" >
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="confirm('You sure about this ?')"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
