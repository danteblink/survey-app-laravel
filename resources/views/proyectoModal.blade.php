<!-- Modal para agregar proyecto -->
<div class="modal fade" id="myModalProyecto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Proyecto</h4>
      </div>
      <div class="modal-body">
            {!! Form::open(['action' => 'proyectoController@add', 'class' => 'form', 'id' => 'addProyectoForm', 'method' => 'POST']) !!}
                <div class="row">
                       <div class="form-group  form-inline col-md-12">
                             <label>Nombre del proyecto:</label>
                             {!! Form::text('nombreProyecto','', ['class'=> 'form-control']) !!}
                       </div>
                </div>
            {!! Form::close() !!}
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" id="btnAddProyecto" class="btn btn-success">Añadir</button>
            </div>
    </div>
  </div>
</div>