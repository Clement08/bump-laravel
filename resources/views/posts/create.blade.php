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
                    </div>



                </div>
                {!! Form::submit('Publier l\'article', ['class' => 'btn waves-effect waves-light col-xs-12']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection