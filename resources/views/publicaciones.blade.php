<div class="row form-group">
    <div class="col-md-8">
        <p>4. Liste las publicaciones científicas de los últimos 10 años:</p>
    </div>
    <div class="col-md-4">
        <a id="add_row" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModalPublicacion">Añadir publicación</a>
    </div>
</div>
<div class="row form-group">
    <div class="col-md-12">
        <table class="table table-bordered table-hover table-responsive" id="tablePublicaciones">
            <thead>
                <tr >
                    <th class="text-center">
                        Nombre de la publicación
                    </th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @include('publicacionModal')

                @foreach ($publicacionesUser as $i=>$publicacion)
                 <tr id="publicacion{{$publicacion->id}}">
                    <td>{{ $publicacion->name }}</td>
                    <td class="col-md-1">
                     <a data-options='{"id":"{{$publicacion->id}}", "type":"publicacion"}' class="btn-block btn btn-danger pull-right openConfirmBtn" data-toggle="modal" data-target="#myModalDelProyecto">Eliminar</a>
                    </td>
                 </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>