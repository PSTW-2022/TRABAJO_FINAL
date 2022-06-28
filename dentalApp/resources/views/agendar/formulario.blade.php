@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <html>
                    <head>
                        <title></title>
                        <meta content="">
                        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
                        <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
                        <style>
                        body{
                        font-family: 'Exo', sans-serif;
                        }
                        .header-col{
                        background: #E3E9E5;
                        color:#536170;
                        text-align: center;
                        font-size: 20px;
                        font-weight: bold;
                        }
                        .header-calendar{
                        background: #EE192D;color:white;
                        }
                        .box-day{
                        border:1px solid #E3E9E5;
                        height:150px;
                        }
                        .box-dayoff{
                        border:1px solid #E3E9E5;
                        height:150px;
                        background-color: #ccd1ce;
                        }
                        </style>

{{-- links para scripts de bootstrap -> funcionalidad boton select --}}
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
                    </head>
                    <body>
                        <div class="container">
                        <div style="height:50px"></div>
                        <h3>Formulario de Citas</h3>
                        <hr>

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif


                        <div class="col-md-6">
                            <form action="{{ route('agendar.separar') }}" method="POST">
                            @csrf
                            <div class="fomr-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div class="fomr-group">
                                <label>Apellidos</label>
                                <input type="text" class="form-control" name="apellidos">
                            </div>
                            <div class="fomr-group">
                                <label>Documento</label>
                                <input type="text" class="form-control" name="documento">
                            </div>
                            {{-- TIPO DE TRABAJO --}}

                            <div class="form-group" >
                                <label for="select1">Tipo de trabajo</label>
                                <select data-live-search="true" class="custom-select" name="tipo_de_trabajo" >
                                    <option value="" disabled>--SELECCIONE UNA OPCIÓN--</option>
                                    <option value="Protesis fija">Protesis fija</option>
                                    <option value="Protesis removible">Protesis removible</option>
                                    <option value="Protesis acrilica">Protesis acrilica</option>
                                </select>


                            </div>

                            <div class="fomr-group">
                                <label>Fecha</label>
                                <input type="date" class="form-control" name="fecha">
                            </div>
                            <div class="fomr-group">
                                <label>Hora</label>
                                <input type="time" class="form-control" name="hora">
                            </div>
                            <br>
                            <input type="submit" class="btn btn-info" value="Guardar">
                            <a type="submit" class="btn btn-info"  href="{{ asset('/') }}">Atras</a>
                            </form>
                        </div>
                        </div>
                    </body>
                </html>
            </div>
        </div>
    </div>
</div>
@endsection
