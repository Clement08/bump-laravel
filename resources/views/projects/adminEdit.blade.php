<div class="panel-heading">
    <h4>Répondre</h4>
</div>
<div class="panel-body">
    {!! Form::model($project,
        array(
            'route' => array('project.update', $project->id),
            'method' => 'PUT'
            ))
        !!}
    <div class="form-group">
        {!! Form::label('status', 'Statut') !!}
        <div class="col-md-offset-1">
            {!! Form::radio('status', "Projet refusé", ['value' => $project->status])!!}
            Refuser
            {!! Form::radio('status', "En attente")!!}
            En attente
            {!! Form::radio('status', "Projet accepté")!!}
            Accepter le projet
        </div>
        <br>
        <div class="form-group">
            {!! Form::submit('Enregistrer la réponse',['class' => 'btn btn-info'])!!}
        </div>
        <div class="form-group">
            {!! Form::close() !!}
            {!! Form::model($project,array(
                'route' => array('project.destroy', $project->id),'method' => 'DELETE'))!!}
            <div class="form-group">
                {!! Form::submit('Supprimer le projet', ['class' => 'btn btn-danger']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>