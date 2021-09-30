<!-- Id Paciente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_paciente', 'Codigo Paciente:') !!}
    {!! Form::text('id_paciente', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Fecha Cita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_cita', 'Fecha Cita:') !!}
    {!! Form::text('fecha_cita', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>

<!-- Id Doctor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_doctor', 'Id Doctor:') !!}
    {!! Form::text('id_doctor', null, ['class' => 'form-control','maxlength' => 45,'maxlength' => 45]) !!}
</div>