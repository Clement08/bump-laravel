@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.message')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Ajouter un article</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                        {!! Form::open(array(
                        'route' => 'post.store',
                        'method' => 'POST'))
                        !!}

                        {!! Form::label('title', 'Titre') !!}
                        {!! Form::text('title', '', ['class' =>'form-control', 'placeholder' => 'Mon titre']) !!}
                        </div>

                        <div class="form-group">

                        {!! Form::label('content', 'Contenu') !!}
                        {!! Form::textarea('content', '', ['class' =>'form-control', 'placeholder' => 'Contenu']) !!}

                        </div>

                        {!! Form::submit('Publier l\'article', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection