<!-- Modal para agregar equipo -->
<div class="modal fade" id="myModalEquipo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar equipo</h4>
      </div>
      <div class="modal-body">
            {!! Form::open(['action' => 'equipoController@add', 'class' => 'form', 'id' => 'addEquipoForm', 'method' => 'POST']) !!}
                <div class="row">
                       <div class="form-group  form-inline col-md-12">
                             <label>Nombre del equipo:</label>
                             {!! Form::text('nombreEquipo','', ['class'=> 'form-control']) !!}
                       </div>
                       <div class="form-group  form-inline col-md-12">
                            <label>Marca:</label>
                            {!! Form::text('marcaEquipo','', ['class'=> 'form-control']) !!}
                      </div>

                      <div class="form-group  form-inline col-md-12">
                           <label>Modelo:</label>
                           {!! Form::text('modeloEquipo','', ['class'=> 'form-control']) !!}
                     </div>
                     <div class="form-group  form-inline col-md-12">
                            <label>Tipo de acceso:</label>
                            {!! Form::select('accesoEquipo', ['0' => 'Personal', '1'=>'Departamental', '2'=>'Institucional'],null,['class'=> 'form-control']) !!}
                     </div>
                </div>
            {!! Form::close() !!}
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" id="btnAddEquipo" class="btn btn-success">Añadir</button>
            </div>
    </div>
  </div>