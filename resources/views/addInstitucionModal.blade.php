<!-- Modal para agregar institucion -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Institución</h4>
      </div>
      <div class="modal-body">

        @include('forms.agregarInstitucion')


      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" id="btnInstitucion" class="btn btn-success">Guardar Institución</button>
            </div>
    </div>
  </div>
</div>