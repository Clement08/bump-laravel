@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">Nous Contacter</div>
                    <div class="panel-body">
                        {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

                        <div class="form-group">
                            {!! Form::label('Votre Nom') !!}
                            {!! Form::text('name', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Votre Nom')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Votre adresse E-mail') !!}
                            {!! Form::text('email', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Votre adresse E-mail')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('Votre Message') !!}
                            {!! Form::textarea('message', null,
                                array('required',
                                      'class'=>'form-control',
                                      'placeholder'=>'Votre Message')) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Envoyer',
                              array('class'=>'btn btn-primary')) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection