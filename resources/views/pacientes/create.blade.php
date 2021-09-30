@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Paciente</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::open(['route' => 'pacientes.store']) !!}

            <div class="card-body">

                <div class="row">
                    @include('pacientes.fields')
                </div>

            </div>

            <div class="card-footer">
            <button class="btn btn-primary float-right" type="submit">
            <i class="fa fa-address-book" aria-hidden="true"></i>
                        Guardar
                </button>
                <a href="{{ route('pacientes.index') }}" class="btn btn-default">
                <i class="fa fa-times" aria-hidden="true"></i>     
                Cancel</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
