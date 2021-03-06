@extends('../templates/main')
@section('title')
    Salon modification
@stop
@section('body')
    <div class="col-sm-offset-4 col-sm-4">
        <div class="panel panel-primary">
            <div class="panel-heading">Salon modification</div>
        </div>
        <div class="panel-body">
            <div class="col-sm-12">
                {!! Form::model($salon,['route' =>['salon.update',$salon->id],'method' => 'put','files' => true]) !!}
                <div class="form-group {!! $errors->has('name') ? 'has-error' : '' !!}">
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
                    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('address') ? 'has-error' : '' !!}">
                    {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Address']) !!}
                    {!! $errors->first('address', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('description') ? 'has-error' : '' !!}">
                    {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) !!}
                    {!! $errors->first('description', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('owner_id') ? 'has-error' : '' !!}">
                    {!! Form::text('owner_id', null, ['class' => 'form-control', 'placeholder' => 'Owner_id']) !!}
                    {!! $errors->first('owner_id', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                    {!! Form::file('main_photo', ['class' => 'form-control','placeholder'=>'main photo']) !!}
                    {!! $errors->first('main_photo', '<small class="help-block">:message</small>') !!}
                </div>
                {!! Form::submit('Save changes', ['class' => 'btn btn-primary pull-right']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">

            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour

        </a>
    </div>
@stop
@section('script')
@stop