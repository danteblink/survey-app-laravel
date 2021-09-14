<div class="row form-group hidden" id="divGrupo">
    <div class=" form-group col-md-4 col-md-offset-8">
        <a id="add_row" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalMiembro">Añadir miembro</a>
    </div>
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-responsive" id="tableMiembro">
            <thead>
                <tr >
                    <th class="text-center">
                        Nombre Completo
                    </th>
                    <th class="text-center">
                        CURP
                    </th>
                    <th class="text-center">
                        Grado máximo de estudios
                    </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @include('miembroModal')
                @foreach ($miembrosUser as $miembro)
                 <tr id="miembro{{$miembro->id}}">
                    <td>{{ $miembro->nombre }}</td>
                    <td>{{ $miembro->curp }}</td>
                    <td>{{ $miembro->grado }}</td>
                    <td class="col-md-1">
                    <a data-options='{"id":"{{$miembro->id}}", "type":"miembro"}' class="btn-block btn btn-danger pull-right openConfirmBtn" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>