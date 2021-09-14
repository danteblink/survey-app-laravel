<!-- Modal para agregar publicacion -->
<div class="modal fade" id="myModalPublicacion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Publicación</h4>
      </div>
      <div class="modal-body">
            {!! Form::open(['action' => 'publicacionController@add', 'class' => 'form', 'id' => 'addPublicacionForm', 'method' => 'POST']) !!}
                <div class="row">
                       <div class="form-group  form-inline col-md-12">
                             <label>Nombre de la publicación:</label>
                             {!! Form::text('nombrePublicacion','', ['class'=> 'form-control']) !!}
                       </div>
                </div>
            {!! Form::close() !!}
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" id="btnAddPublicacion" class="btn btn-success">Añadir</button>
            </div>
    </div>
  </div>
