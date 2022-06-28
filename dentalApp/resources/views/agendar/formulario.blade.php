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
                            <form action="{{ asset('/agendar/create/') }}" method="post">
                            @csrf
                            <div class="fomr-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" name="titulo">
                            </div>
                            <div class="fomr-group">
                                <label>Apellidos</label>
                                <input type="text" class="form-control" name="titulo">
                            </div>
                            <div class="fomr-group">
                                <label>Documento</label>
                                <input type="text" class="form-control" name="titulo">
                            </div>
                            {{-- TIPO DE TRABAJO --}}
                            <div class="fomr-group">
                                <label>Tipo de trabajo</label>
                                <input type="text" class="form-control" name="titulo">
                            </div>
                            
                            {{-- <div class="fomr-group" >
                                <label>Tipo de trabajo</label>
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></button> 
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>
                                                <ul class="list-group">
                                                    <li class="list-group-item active" aria-current="true"">Profilaxis</li>
                                                    <li class="list-group-item">Retiro de brackets</li>
                                                    <li class="list-group-item">Limpieza general</li>
                                                </ul>
                                            </strong>
                                        
                                    </div>
                                </div>
                            </div>
                            </div>         --}}
                            {{-- TIPO DE TRABAJO    --}}
                            
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
