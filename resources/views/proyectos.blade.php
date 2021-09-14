<div class="row form-group">
        <div class="col-md-8">
            <p>3. Proyectos de Investigación. Enliste todos los que se están realizando actualmente en su laboratorio:</p>
        </div>
        <div class="col-md-4">
            <a id="add_row" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalProyecto">Añadir proyecto</a>
        </div>
</div>
<div class="row form-group">
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-responsive" id="tableProyectos">
            <thead>
                <tr >
                    <th class="text-center">
                        Nombre del Proyecto
                    </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @include('proyectoModal')

                @foreach ($proyectosUser as $i=>$proyecto)
                 <tr id="proyecto{{$proyecto->id}}">
                    <td>{{ $proyecto->name }}</td>
                    <td class="col-md-1">
                     <a data-options='{"id":"{{$proyecto->id}}", "type":"proyecto"}' class="btn-block btn btn-danger pull-right openConfirmBtn" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>