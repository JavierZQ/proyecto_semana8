@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Usuario</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($usuario, ['route' => ['usuarios.update', $usuario->idusuario], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('usuarios.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Guarfar', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('usuarios.index') }}" class="btn btn-default">Cancel</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
