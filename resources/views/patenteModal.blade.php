<!-- Modal para agregar patente -->
<div class="modal fade" id="myModalPatente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar patente</h4>
      </div>
      <div class="modal-body">
            {!! Form::open(['action' => 'patenteController@add', 'class' => 'form', 'id' => 'addPatenteForm', 'method' => 'POST']) !!}
                <div class="row">
                       <div class="form-group  form-inline col-md-12">
                             <label>Nombre de la patente:</label>
                             {!! Form::text('nombrePatente','', ['class'=> 'form-control']) !!}
                       </div>
                       <div class="form-group  form-inline col-md-12">
                            <label>Situación de la patente:</label>
                            {!! Form::select('situacionPatente', ['0' => 'En trámite', '1'=>'Concedida', '2'=>'Licenciada', '4'=>'En explotación'],null,['class'=> 'form-control']) !!}
                      </div>

                      <div class="form-group  form-inline col-md-12">
                           <label>Autor(es) de la patente:</label>
                           {!! Form::text('autoresPatente','', ['class'=> 'form-control']) !!}
                     </div>
                     <div class="form-group  form-inline col-md-12">
                            <label>País(es) donde esta registrada la patente:</label>
                            {!! Form::text('paisesPatente','', ['class'=> 'form-control']) !!}
                     </div>
                </div>
            {!! Form::close() !!}
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" id="btnAddPatente" class="btn btn-success">Añadir Patente</button>
            </div>
    </div>
  </div>