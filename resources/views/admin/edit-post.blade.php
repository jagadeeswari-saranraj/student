@extends('admin.app')
@section('main-content')
    <div>
            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @if(session('message'))
                            <div class="alert alert-success">
                                {{session('message')}}
                            </div>
                        @endif
        <!-- <x-link-field color='btn-success' title='View File' link='list-post'/> -->
        <div>
            <h1> Edit Post</h1>
        </div>
        <form method='post' action="{{url('updatepost')}}" enctype="multipart/form-data">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        
        @csrf
            <input type="hidden" id="id" name="id" value="{{$post->id}}">
            <x-text-field title='Post Title' value="{{$post->Title}}" name='title'/>
            <div class='form-group'>
                <label> Image Preview </label>
                <img src="{{asset('images/'.$post->Image)}}" style="width: 10em; height: 16em;" class="card-img-top" alt="...">
            </div>
            <x-file-field title='Upload Your File' name='image'/>
            <x-textarea title='Post Description' description="{{$post->Description}}" name='description'/>
            <x-buttons color='btn-success' title='Update File'/>
        </form>
    </div>
@endsection