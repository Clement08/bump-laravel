@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <h4>Your name is {{ Auth::user()->name }}</h4>
                <h4>Your email is {{ Auth::user()->email }}</h4>
                <img src="{{ Auth::user()->avatar }}" height="200" width="200" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
