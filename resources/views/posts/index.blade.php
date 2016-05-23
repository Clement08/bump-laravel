@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('errors.message')
        <div class="row">
            <h3 class="text-center">Dernières publications</h3>
            @foreach($list as $post)
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <img class="img-responsive" src="http://media.meltystyle.fr/pmedia-2764427-ajust_640/plusieurs-points-de-vente-sont-prevus.jpg">
                            <a href="{{route('post.show', $post->id)}}">
                                <h3>{{ $post->title }}</h3>
                            </a>
                            <h5 class="text-right">{{$post->created_at}} <br><small>mise à jour le {{$post->updated_at}}</small></h5>
                        </div>
                        <div class="panel-body">
                            <br>
                            {{ $post->content }}
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-xs-12 text-center">
                {!! $list->links() !!}
            </div>
        </div>
    </div>
@endsection