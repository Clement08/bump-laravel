@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> <h4>{{ Auth::user()->name }}</h4></div>

                <div class="panel-body">


                <h4>{{ Auth::user()->email }}</h4>
                <img src="{{ Auth::user()->avatar }}" height="200" width="200" alt="">
            </div>

            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('post.index') }}">Annonces</a>
                </li>
                @if(Auth::check())
                <li>
                    <a href="{{ route('post.create') }}">Rédiger une annonce</a>
                </li>
                @endif
            </ol>
        </div>

        </div>
    </div>
</div>
@endsection
