<div class="row form-group">
    <div class="col-md-8">
        <p>6. Indicar si tiene aguna vinculación con empresas, gobierno y/o ONG's:</p>
    </div>
    <div class="col-md-4">
        <a id="add_row" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalVinculacion">Añadir vinculación</a>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-responsive" id="tableVinculacion">
            <thead>
                <tr >
                    <th class="text-center">
                        Nombre de la empresa, gobierno y/o ONG's
                    </th>
                    <th class="text-center">
                        Tipo de colaboración
                    </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @include('vinculacionModal')

                @foreach ($vinculacionesUser as $i=>$vinculacion)
                 <tr id="vinculacion{{$vinculacion->id}}">
                    <td>{{ $vinculacion->name }}</td>
                    <td>{{ $vinculacion->type }}</td>
                    <td class="col-md-1">
                    <a data-options='{"id":"{{$vinculacion->id}}", "type":"vinculacion"}' class="btn-block btn btn-danger pull-right openConfirmBtn" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>