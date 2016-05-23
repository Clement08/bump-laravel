@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('errors.message')
        <div class="row">
            <div class="col-xs-12">
                <a class="btn btn-info" href="{{route('post.index')}}">
                    Retour aux articles
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <img class="img-responsive" src="http://media.meltystyle.fr/pmedia-2764427-ajust_640/plusieurs-points-de-vente-sont-prevus.jpg">
                        <div class="col-xs-12">
                        <h3>{{ $post->title }} <br><small>Posté par {{ $post->user->name }} le {{$post->created_at}}</small></h3>
                        <div class="col-xs-2 col-xs-offset-10">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 138.37 143.09"><title>logo</title><text transform="translate(28.56 111.71) scale(1.04 1)" font-size="111.19" fill="#eb3254" font-family="Open Sans" font-weight="700" style="isolation:isolate">B</text><path d="M142.76,147.68H21.24a8,8,0,0,1-7.92-7.92V18.24a8,8,0,0,1,7.92-7.92H142.76a8,8,0,0,1,7.92,7.92V139.76A8,8,0,0,1,142.76,147.68Z" transform="translate(-12.82 -9.82)" fill="none" stroke="#eb3254" stroke-miterlimit="10"/></svg>
                        </div>
                        </div>
                    </div>
                </div>
                    <div class="panel-body">
                        {{ $post->content }}
                    </div>
                </div>
                <div class="panel">
                    @if(Auth::check() && (Auth::user()->id == $post->user_id OR Auth::user()->isAdmin))
                        <a class="btn btn-info" href="{{route('post.edit', $post->id)}}">
                            Modifier l'article
                        </a>
                        {!! Form::model($post,
                        array(
                        'route' => array('post.destroy', $post->id),
                        'method' => 'DELETE')
                        )
                        !!}

                        {!! Form::submit('Supprimer', ['class' => 'btn btn-danger']) !!}

                        {!! Form::close() !!}
                    @endif
                </div>
                <div class="panel-body col-xs-12">
                    <h3>Commentaires</h3>
                    <hr>
                    @foreach($post->comments as $comment)
                        <p>
                            <strong>{{ $comment->user->name }}</strong>
                            <br>
                            {{ $comment->comment }}
                            <br>
                            @if(Auth::check() && (Auth::user()->id == $comment->user_id OR Auth::user()->isAdmin))
                            <a href="{{route('comment.edit', $comment->id)}}">
                                Modifier le commentaire
                            </a>
                                {!! Form::model($post,
                                    array(
                                    'route' => array('comment.destroy', $comment->id),
                                    'method' => 'DELETE')
                                    )
                                !!}
                                {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-sm']) !!}

                                {!! Form::close() !!}
                            @endif

                        </p>
                    @endforeach
                </div>
                @if(Auth::check())
                <div class="panel-body">
                    @include('comments.create', array($post))
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection