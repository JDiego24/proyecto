@extends('layout/plantilla')

@section('tituloPagina','Registro de consultas')

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
        <h5 class="card-header">Registro de consultas</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 text-center">
                    @if ($mensaje= Session::get("success"))
                    <div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>{{ $mensaje }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
            <h5 class="card-title text-center">Listado de consultas en el sistema</h5>
            <form action="" method="get">
                <div class="input-group mb-3">
                    <input name="texto" value="" type="text" class="form-control" placeholder="Busqueda de alumno por matricula" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-outline-primary" type="submit">Buscar</button>
                    </div>
                    <div class="input-group-append">
                        <a href="" class="btn btn-outline-primary">Limpiar</a>
                      </div>
                  </div>
            </form>
            <hr>
            <p class="card-text">
            <div class="table table-responsive">
                <table class="table table-sm table-bordered table-hover border-dark">
                    <thead>
                        <th>Nombre</th>
                        <th>Área</th>
                        <th>Matricula</th>
                        <th>Diagnostico</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
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
                    <span class="fas fa-user-plus"></span> Crear nueva consulta</a>
              </div>
        </div>
    </div>
</body>
</html>
@endsection