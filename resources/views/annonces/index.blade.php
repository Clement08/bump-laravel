@extends('layouts.app')

@section('content')
    @if(Auth::check() && Auth::user()->isAdmin)
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    @include('errors.message')
                </div>
                @foreach($annonce as $annonces)
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{ route('annonce.show', $annonce->id) }}">
                                    <h4>{{ $annonce->annonce_name }}</h4>
                                    <br>
                                    <h5>{{ $annonce->annonce_pointure }}</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="text-center">
                    {!! $list->links() !!}
                </div>
            </div>
        </div>
    @endif
@endsection