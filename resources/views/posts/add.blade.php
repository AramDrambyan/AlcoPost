@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (Session::has('Success'))
                            <h3><div class="bg-success">{{ Session::get('Success') }}</div></h3>
                        @endif
                        <dev><h3>Add post</h3>
                            <form method="POST" action="{{route('create')}}">
                                {!! csrf_field() !!}
                                <dev>
                                    <dev>Post Title</dev>
                                    <input type="text" class="form-control" placeholder="Title" name="title"><br>
                                    <dev>Post Content</dev>
                                    <textarea class="form-control" rows="3" placeholder="Content" name="body"></textarea><br>
                                    <div class="row">
                                        <div class="col-md-2"><button type="submit" class="btn btn-default ">
                                                Add</button></div>
                                        <div class="col-md-2"><a class="btn btn-default " href={{ route('posts') }}>
                                                View Posts</a></div>
                                    </div>
                                </dev>
                            </form>
                        </dev>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection