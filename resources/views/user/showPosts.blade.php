<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">Mes Articles</div>
                <div class="panel-body">
                    @foreach(Auth::user()->posts as $post)
                        <div class="panel-heading">
                            <a href="{{route('post.show', $post->id)}}">
                                <h4>{{ $post->title }}</h4>
                            </a>
                            <h5 class="text-right">{{$post->created_at}}</h5>
                        </div>
                        <div class="panel-body">
                            {{ $post->content }}
                        </div>
                        <a href="{{ route('post.edit', $post->id) }}" class="btn btn-info">Modifier son post</a>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>