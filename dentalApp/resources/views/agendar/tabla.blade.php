@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">nombre</th>
                        <th scope="col">apellidos</th>
                        <th scope="col">documento</th>
                        <th scope="col">tipo de trabajo</th>
                        <th scope="col">fecha</th>
                        <th scope="col">hora</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($cita as $item)
                      <tr>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->apellidos}}</td>
                        <td>{{$item->documento}}</td>
                        <td>{{$item->tipo_de_trabajo}}</td>
                        <td>{{$item->fecha}}</td>
                        <td>{{$item->hora}}</td>
                        @endforeach
                    </tbody>
                  </table>
                  <a type="submit" class="btn btn-info"  href="{{ asset('/') }}">Atrás</a>
            </div>
        </div>
    </div>
</div>
@endsection