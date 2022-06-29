@extends('layouts.app')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
                        <link href="https://fonts.googleapis.com/css?family=Exo&display=swap" rel="stylesheet">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">nombre odontologo</th>
                        <th scope="col">nombre paciente</th>
                        <th scope="col">Fecha llegada</th>
                        <th scope="col">Fecha salida</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($trabajos as $item)
                      <tr>
                        <td>{{$item->nombreOdontologo}}</td>
                        <td>{{$item->nombrePaciente}}</td>
                        <td>{{$item->fechaLlegada}}</td>
                        <td>{{$item->fechaSalida}}</td>
                        @endforeach
                    </tbody>
                  </table>
                  <a type="submit" class="btn btn-info"  href="{{ asset('/') }}">Atrás</a>
            </div>
        </div>
    </div>
</div>
@endsection