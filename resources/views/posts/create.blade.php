@extends('layouts.app')

@section('content')
    <div class="container">
        @include('errors.message')
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Ajouter une annonce</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                        {!! Form::open(array(
                        'route' => 'post.store',
                        'method' => 'POST'))
                        !!}

                        {!! Form::label('title', 'Annonce') !!}
                        {!! Form::text('title', '', ['class' =>'form-control', 'placeholder' => 'Annonce']) !!}
                        </div>

                        <div class="form-group">

                        {!! Form::label('content', 'Description') !!}
                        {!! Form::textarea('content', '', ['class' =>'form-control', 'placeholder' => 'Description']) !!}

                        </div>
                    </div>



                </div>
                {!! Form::submit('Publier l\'annonce', ['class' => 'btn waves-effect waves-light col-xs-12']) !!}

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection