@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.message')
        <div class="row">
            @foreach($list as $post)
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{route('post.show', $post->id)}}">
                            <h3>{{ $post->title }}</h3>
                        </a>
                        <h4 class="text-right">{{$post->created_at}}</h4>
                    </div>
                    <div class="panel-body">
                        <br>
                        {{ $post->content }}
                    </div>
                </div>
            </div>
            @endforeach
            {!! $list->links() !!}
        </div>
    </div>
@endsection