@extends('layouts.app')

@section('template_title')
    {{ $trabajo->name ?? 'Show Trabajo' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Trabajo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('trabajos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombreodontologo:</strong>
                            {{ $trabajo->nombreOdontologo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrepaciente:</strong>
                            {{ $trabajo->nombrePaciente }}
                        </div>
                        <div class="form-group">
                            <strong>Fechallegada:</strong>
                            {{ $trabajo->fechaLlegada }}
                        </div>
                        <div class="form-group">
                            <strong>Fechasalida:</strong>
                            {{ $trabajo->fechaSalida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
