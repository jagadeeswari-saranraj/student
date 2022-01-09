@extends('admin.app')
@section('main-content')
    <div>
        @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif
        <div class='row'>
            @foreach ($posts as $post)
                <div class='col-4' style="padding: 10px;">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('images/'.$post->Image)}}" style="height: 16em;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><b>{{$post->Title}}</b></h5>
                            <p> Created by: {{$post->user->name}}</p>
                            <p class="card-text">{{$post->Description}}</p>
                            <x-link-field color='btn-primary' title='Edit Post' link="editpost/{{$post->id}}"/>
                            <x-link-field color='btn-danger' title='Delete Post' link="deletepost/{{$post->id}}"/>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection