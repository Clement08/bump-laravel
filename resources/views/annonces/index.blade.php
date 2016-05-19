@extends('layouts.app')

@section('content')
    @if(Auth::check() && Auth::user()->isAdmin)
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    @include('errors.message')
                </div>
                @foreach($list as $annonce)
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a href="{{ route('annonce.show', $annonce->id) }}">
                                    <h4>{{ $annonce->annonce_name}}</h4>
                                </a>
                                <h5 class="text-right">{{$annonce->status}}</h5>
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