<div class="col-xs-12" style="height:25px;"></div>
<div class="row form-group">
    <div class="col-md-8">
        <p>1. Equipos mayores con los que cuenta para su investigación o tecnologías a las que tiene acceso en su institución.(v.g., microscopía electrónica, microscopía confocal, secuenciación y síntesis de DNA,espectrometría de masas, microscopía de fuerza atómica, citómetro de flujo, etc.). Indique si son personales,departamentales o institucionales:</p>
    </div>
    <div class="col-md-4">
        <a id="add_row" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalEquipo">Añadir equipo</a>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-responsive" id="tableEquipo">
            <thead>
                <tr >
                    <th class="text-center">
                        Nombre del equipo
                    </th>
                    <th class="text-center">
                        Marca
                    </th>
                    <th class="text-center">
                        Modelo
                    </th>
                    <th class="text-center">
                        Tipo de acceso
                    </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @include('equipoModal')
                @foreach ($equiposUser as $i=>$equipo)
                 <tr id="equipo{{$equipo->id}}">
                    <td>{{ $equipo->name }}</td>
                    <td>{{ $equipo->marca }}</td>
                    <td>{{ $equipo->modelo }}</td>
                    <td>{{ $equipo->acceso }}</td>
                    <td class="col-md-1">
                    <a data-options='{"id":"{{$equipo->id}}", "type":"equipo"}' class="btn-block btn btn-danger pull-right openConfirmBtn" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="row form-group">
         <div class="form-group col-md-2 col-md-offset-5">
                 <a  id="saveEquipo" class="btn btn-success btn-cuestionario btn-block">Guardar Cuestionario</a>
         </div>
    </div>
