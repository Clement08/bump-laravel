<div class="row">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3>Ajouter un commentaire</h3>
        </div>
        <div class="panel-body">
            <div class="form-group">
                <h3>{{ Auth::user()->name }}</h3>
            </div>
            <div class="form-group">
                {!! Form::open(
                array(
                   'action' =>  array('CommentController@store', $post->id),
                    'method' => 'POST'))
                !!}
                {!! Form::label('comment', 'Commentaire') !!}
                {!! Form::textarea('comment', '', ['class' =>'form-control', 'placeholder' => 'Contenu']) !!}

                {!! Form::hidden('post_id', $post->id) !!}
            </div>
            {!! Form::submit('Publier', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
