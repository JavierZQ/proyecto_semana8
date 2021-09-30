<!-- Ape Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ape_nom', 'Apellido y Nombre:') !!}
    {!! Form::text('ape_nom', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Dni Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dni', 'Dni:') !!}
    {!! Form::text('dni', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('celular', 'Celular:') !!}
    {!! Form::text('celular', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>