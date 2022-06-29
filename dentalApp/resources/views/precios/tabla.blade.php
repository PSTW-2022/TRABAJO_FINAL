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
                        <th scope="col">descripcion</th>
                        <th scope="col">precio</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($producto as $item)
                      <tr>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->precio}}</td>
                        @endforeach
                    </tbody>
                  </table>
                  <br>
                  <a href="{{ route('precios-pdf')}}" type="submit" class="btn btn-success">Descargar Reporte</a>
                  <br>
                  <a type="submit" class="btn btn-info"  href="{{ asset('/') }}">Atrás</a>
            </div>
        </div>
    </div>
</div>
@endsection