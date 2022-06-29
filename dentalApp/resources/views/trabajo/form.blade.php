<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre Odontologo') }}
            {{ Form::text('nombreOdontologo', $trabajo->nombreOdontologo, ['class' => 'form-control' . ($errors->has('nombreOdontologo') ? ' is-invalid' : ''), 'placeholder' => 'odontologo']) }}
            {!! $errors->first('nombreOdontologo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre Paciente') }}
            {{ Form::text('nombrePaciente', $trabajo->nombrePaciente, ['class' => 'form-control' . ($errors->has('nombrePaciente') ? ' is-invalid' : ''), 'placeholder' => 'paciente']) }}
            {!! $errors->first('nombrePaciente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha Llegada') }}
            {{ Form::date('fechaLlegada', $trabajo->fechaLlegada, ['class' => 'form-control' . ($errors->has('fechaLlegada') ? ' is-invalid' : ''), 'placeholder' => 'llegada']) }}
            {!! $errors->first('fechaLlegada', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha Salida') }}
            {{ Form::date('fechaSalida', $trabajo->fechaSalida, ['class' => 'form-control' . ($errors->has('fechaSalida') ? ' is-invalid' : ''), 'placeholder' => 'salida']) }}
            {!! $errors->first('fechaSalida', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
                {{Form::label('Tipo de trabajo')}}
                <select data-live-search="true" class="custom-select" name="tipo_de_trabajo" >
                    <option value="" disabled>--SELECCIONE UNA OPCIÓN--</option>
                    <option value="Protesis fija">Protesis fija</option>
                    <option value="Protesis removible">Protesis removible</option>
                    <option value="Protesis acrilica">Protesis acrilica</option>
                </select>
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
