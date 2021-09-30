<!-- Ape Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ape_nom', 'Apellido y Nombre:') !!}
    {!! Form::text('ape_nom', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!-- Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario', 'Usuario:') !!}
    {!! Form::text('usuario', null, ['class' => 'form-control','maxlength' => 100,'maxlength' => 100]) !!}
</div>

<!--  Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label(' password', ' Password:') !!}
    {!! Form::text(' password', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>