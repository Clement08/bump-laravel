@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.message')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Modifier son commentaire</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            @if(Auth::check() && ($post->user_id == Auth::user()->id || Auth::user()->isAdmin) )
                                {!! Form::model($post,
                                array(
                                'route' => array(
                                'comment.update', $post->id),
                                'method' => 'PUT')
                                )
                                !!}
                        </div>
                        <div class="form-group">
                            <h3>{{ Auth::user()->name }}</h3>
                        </div>
                        <div class="form-group">
                            {!! Form::label('comment', 'Commentaire') !!}
                            {!! Form::textarea('comment', old('comment'), ['class' =>'form-control', 'placeholder' => 'Contenu']) !!}
                        </div>

                        {!! Form::submit('Editer', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                        @else
                            <p>Vous n'avez pas les droits nécessaires...</p>
                            <a href="{{ route('post.show', $comment->post_id) }}">Retour à l'article</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection