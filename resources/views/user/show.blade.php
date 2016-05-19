@extends('layouts.app')
@section('content')
    @if(Auth::check() && (Auth::user()->id == $user->id OR Auth::user()->isAdmin))
        <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Mon compte</div>
                    <div class="panel-body">
                        <div class="col-xs-4 text-right">
                            <h4>Name :</h4>
                        </div>
                        <div class="col-xs-8">
                            <h4>{{ Auth::user()->name }}</h4>
                        </div>
                        <div class="col-xs-4 text-right">
                            <h4>Mail :</h4>
                        </div>
                        <div class="col-xs-8">
                            <h4>{{ Auth::user()->email }}</h4>
                        </div>
                        <div class="col-xs-8 col-xs-offset-4">
                            <br>
                            <a href="{{route('user.edit', $user->id)}}" type="button" class="btn btn-info btn-md">Editer mon profil</a>
                            {!! Form::model($user,
                                array(
                                'route' => array('user.destroy', $user->id),
                                'method' => 'DELETE')
                                )
                            !!}
                            {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-md']) !!}
                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('user.showPosts')
    @include('user.showProjects')
    @else
        <div class="container">
            <h3 class="text-center">Vous n'avez pas les droits nécessaires...</h3>
            <a href="{{ route('user.show', Auth::user()->id) }}" class="btn btn-primary">Retour à mon profil</a>
        </div>
    @endif
@endsection
