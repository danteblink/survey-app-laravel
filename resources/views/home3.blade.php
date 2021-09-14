@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Investigadores</h3>
                <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre de Usuario</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($investigadores as $investigador)
                                <tr>
                                    <td>{{ $investigador->name }}</td>
                                    <td>{{ $investigador->email }}</td>
                                    <td>
                                        <a href="investigador/{{$investigador->id}}" class="btn btn-info btn-block">Ver perfil</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <h3><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Estudiantes</h3>
                <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre de Usuario</th>
                                    <th>Email</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($estudiantes as $estudiante)
                                <tr>
                                    <td>{{ $estudiante->name }}</td>
                                    <td>{{ $estudiante->email }}</td>
                                    <td>
                                        <a href="estudiante/{{$estudiante->id}}" class="btn btn-info btn-block">Ver perfil</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>
    </div>
@endsection