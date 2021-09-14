<!-- Modal para agregar miembro del grupo -->
<div class="modal fade" id="myModalMiembro" tabindex="-1" role="dialog" aria-labelledby="myModalMiembroLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalMiembroLabel">Agregar miembro</h4>
      </div>
      <div class="modal-body">
            {!! Form::open(['action' => 'miembroController@add', 'class' => 'form', 'id' => 'addMiembroForm', 'method' => 'POST']) !!}
                <div class="row">
                       <div class="form-group  form-inline col-md-12">
                             <label>Nombre completo:</label>
                             {!! Form::text('nombreMiembro','', ['class'=> 'form-control']) !!}
                       </div>
                       <div class="form-group  form-inline col-md-12">
                              <label>CURP:</label>
                              {!! Form::text('curpMiembro','', ['class'=> 'form-control']) !!}
                        </div>
                       <div class="form-group  form-inline col-md-12">
                            <label>Grado máximo de estudios:</label>
                            {!! Form::select('gradoMiembro', ['especialidad' => 'Especialidad', 'licenciatura'=>'Licenciatura', 'maestría'=>'Maestría', 'doctorado'=>'Doctorado'],null,['class'=> 'form-control']) !!}
                      </div>
                </div>
            {!! Form::close() !!}
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" id="btnAddMiembro" class="btn btn-success">Añadir</button>
            </div>
    </div>
  </div>