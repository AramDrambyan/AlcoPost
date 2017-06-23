@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8">
                <div class="panel panel-default">
                    <h2><div class="panel-heading">Posts</div></h2>

                    <div class="panel-body">

                        @foreach($posts as $post)
                            <h3>{!! $post->title !!}</h3>
                            <p>{!! $post->body !!}</p>
                            <br><br>
                        @endforeach

                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-4">
                <button type="button" class="btn btn-default"
                        onclick="window.location='{{ route("addPost") }}'">Add New Post</button><br><br>
            </div>
        </div>
    </div>

@endsection