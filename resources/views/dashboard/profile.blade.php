@extends('dashboard.layout')
@section('content')
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Profile</li>
    </ol>
    <div class="container">
        <div class="row">
            <div class="card col-10" style="margin-left: 8.33%;">
                <img class="card-img-top mt-2" src="/assets/images/users/douich.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title text-center">{{$user->name}} </h4>
                    <div class="row form-group" >
                        <label for="" >Email :</label>
                        <input type="text" class="form-control" value="{{$user->email}}" disabled>
                    </div>
                    <div class="row form-group" >
                        <label for="" >Statut :</label>
                        <input type="text" class="form-control" value="{{$user->statut}}" disabled>
                    </div>
                    <div class="row form-group" >
                        <label for="" >Description :</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control" disabled>
                            {{$user->description}}
                        </textarea>
                    </div>
                    <div class="text-right">
                        <a href="{{route('dashboard.users.edit',Auth::id())}}" class="btn btn-warning "><i class="fa fa-edit"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
