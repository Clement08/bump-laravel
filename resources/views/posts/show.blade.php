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
                        <h3>{{ $post->title }} <br><small>Posté par {{ $post->user->name }} le {{$post->created_at}}</small></h3>
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