@extends('layouts.app')

@section('content')
    @if(Auth::check() && (Auth::user()->id == $user->id OR Auth::user()->isAdmin))
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Modifier mon profil |
                        <a href="{{ route('user.show', $user->id) }}" class="text-right">Retour à ma page profil</a>
                    </div>
                    <div class="panel-body">
                        {!! Form::model($user,
                        array(
                        'route' => array('user.update', $user->id),
                        'method' => 'PUT',
                        )) !!}
                        <div class="form-group">
                            {!! Form::label('name', 'Nom', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-5">
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => ''])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Adresse email', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-5">
                                {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => ''])!!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Modifier', ['class' => 'btn btn-primary'])!!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="form-group text-center">
                        <a href="{{route('password.edit', Auth::user()->id)}}" type="button" class="btn btn-info btn-md">Modifier son mot de passe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
        <div class="container">
            <h3 class="text-center">Vous n'avez pas les droits nécessaires...</h3>
            <a href="{{ route('user.show', Auth::user()->id) }}" class="btn btn-primary">Retour à mon profil</a>
        </div>

    @endif
@endsection