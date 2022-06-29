@extends('layouts.app')

@section('template_title')
    Trabajo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Trabajo') }}
                            </span>
                            <div>
                                <a href="{{ route('trabajos-pdf')}}" type="submit" class="btn btn-success">Descargar Reporte</a>
                                <br>
                            </div>
                             <div class="float-right">
                                <a href="{{ route('trabajos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo trabajo') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Nombre odontologo</th>
										<th>Nombre paciente</th>
										<th>Fecha llegada</th>
										<th>Fecha salida</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($trabajos as $trabajo)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $trabajo->nombreOdontologo }}</td>
											<td>{{ $trabajo->nombrePaciente }}</td>
											<td>{{ $trabajo->fechaLlegada }}</td>
											<td>{{ $trabajo->fechaSalida }}</td>

                                            <td>
                                                <form action="{{ route('trabajos.destroy',$trabajo->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('trabajos.show',$trabajo->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('trabajos.edit',$trabajo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $trabajos->links() !!}
            </div>
        </div>
    </div>
@endsection
