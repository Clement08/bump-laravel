@extends('layouts.app')

@section('content')
    @if(Auth::check() && Auth::user()->isAdmin)
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @include('errors.message')
            </div>
            @foreach($list as $project)
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="{{ route('project.show', $project->id) }}">
                                <h4>{{ $project->project_name}}</h4>
                            </a>
                            <h5 class="text-right">{{$project->status}}</h5>
                        </div>

                        <div class="panel-body">
                            <h4>Client</h4>
                            <p>{{ $project->customer_infos }}</p>
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