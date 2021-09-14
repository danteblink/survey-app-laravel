<div class="row form-group">
    <div class="col-md-8">
        <p>5. En caso de contar con alguna patente favor de registrarla:</p>
    </div>
    <div class="col-md-4">
        <a id="add_row" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalPatente">Añadir patente</a>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-responsive" id="tablePatentes">
            <thead>
                <tr >
                    <th class="text-center">
                        Nombre de la patente
                    </th>
                    <th class="text-center">
                        Situación de la patente
                    </th>
                    <th class="text-center">
                        Autor(es) de la patente
                    </th>
                    <th class="text-center">
                        País(es) donde está registrada la patente
                    </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @include('patenteModal')

                @foreach ($patentesUser as $i=>$patente)
                 <tr id="patente{{$patente->id}}">
                    <td>{{ $patente->name }}</td>
                    <td>{{ $patente->situacion }}</td>
                    <td>{{ $patente->autores }}</td>
                    <td>{{ $patente->paises }}</td>
                    <td class="col-md-1">
                    <a data-options='{"id":"{{$patente->id}}", "type":"patente"}' class="btn-block btn btn-danger pull-right openConfirmBtn" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>