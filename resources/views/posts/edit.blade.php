@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.message')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Modifier l'article</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            @if(Auth::check() && ($post->user_id == Auth::user()->id || Auth::user()->isAdmin) )
                                {!! Form::model($post,
                                array(
                                'route' => array(
                                'post.update', $post->id),
                                'method' => 'PUT')
                                )
                                !!}

                                {!! Form::label('title', 'Titre') !!}
                                {!! Form::text('title', old('title'), ['class' =>'form-control', 'placeholder' => 'Mon titre']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('content', 'Contenu') !!}
                            {!! Form::textarea('content', old('content'), ['class' =>'form-control', 'placeholder' => 'Contenu']) !!}
                        </div>
                        {!! Form::submit('Publier l\'article', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                            @else
                                <p>Vous n'avez pas les droits nécessaires...</p>
                                <a href="{{ route('post.show', $post->id) }}">Retour à la liste d'article</a>
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection