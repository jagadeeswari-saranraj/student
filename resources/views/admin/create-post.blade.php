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
            <h1> Create Post</h1>
        </div>
        <form method='post' action="{{url('addfile')}}" enctype="multipart/form-data">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        
        @csrf
            <x-text-field title='Post Title' name='title'/>
            <x-file-field title='Upload Your File' name='image'/>
            <x-textarea title='Post Description' name='description'/>
            <x-buttons color='btn-success' title='Add File'/>
        </form>
    </div>
@endsection