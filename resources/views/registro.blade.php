@extends('layout/plantilla')

@section('tituloPagina','Registro')

@section('contenido')
<br><br>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../css/crud.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="card">
        <h5 class="card-header">Registro de alumnos</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 text-center">
                    @if ($mensaje= Session::get("success"))
                    <div class="alert alert-success" role="alert"> {{ $mensaje }}</div>
                    @endif
                </div>
            </div>
            <h5 class="card-title text-center">Listado de alumnos en el sistema</h5>
            <form action="{{ route('alumnos.index') }}" method="get">
                <div class="input-group mb-3">
                    <input name="texto" value="{{ $texto }}" type="text" class="form-control" placeholder="Busqueda de alumno por matricula" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </div>
                    <div class="input-group-append">
                        <a href="{{ route("alumnos.index") }}" class="btn btn-outline-primary">Limpiar</a>
                      </div>
                  </div>
            </form>
            <hr>
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered table-hover border-dark">
                    <thead>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Fecha de nacimiento</th>
                        <th>Telefono</th>
                        <th>Matricula</th>
                        <th>Correo institucional</th>
                        <th>CURP</th>
                        <th>NSS</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        <th>Consulta</th>
                    </thead>
                    <tbody>
                        @if(count($datos)<=0)
                        <tr> 
                            <td colspan="11">No hay resultados</td>
                        </tr>
                        @else
                        @foreach ($datos as $item)
                        <tr>
                            <td>{{ $item->Nombre }}</td>
                            <td>{{ $item->Apellido_P }}</td>
                            <td>{{ $item->Apellido_M }}</td>
                            <td>{{ $item->Fecha_Nacimiento }}</td>
                            <td>{{ $item->Telefono }}</td>
                            <td>{{ $item->Matricula }}</td>
                            <td>{{ $item->Correo_Electronico }}</td>
                            <td>{{ $item->Curp }}</td>
                            <td>{{ $item->NSS }}</td>
                            <td>
                                <form action="{{ route("alumnos.edit", $item->id) }}" method="GET">
                                    <button class="btn btn-outline-warning">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("alumnos.show", $item->id) }}" method="GET">
                                    <button class="btn btn-outline-danger">
                                        <span class="fas fa-user-times"></span>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <form action="{{ route("alumnos.show", $item->id) }}" method="GET">
                                    <button class="btn btn-outline-success">
                                        <span class="fa fa-user-md"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                    </tbody>                    
                </table>
                <hr>
            </div>
            <div class="row">
                <div class="col-sm-12">
                </div>
            </div>
            </p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route("alumnos.create") }}" class="btn btn-outline-primary">
                    <span class="fas fa-user-plus"></span> Agregar nuevo alumno</a>
              </div>
        </div>
    </div>
</body>
</html>
@endsection