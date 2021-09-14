<div class="col-xs-12" style="height:25px;"></div>
@if(isset($grupoUser))
{!! Form::model($grupoUser, ['route' => 'grupo.update', $grupoUser->user_id]) !!}
@else
{!! Form::open(['action' => 'grupoController@add', 'class' => 'form', 'method' => 'POST']) !!}
@endif
    <div class="row form-group">
    <div class="col-md-12">
    Ingrese los datos de la institución a la que se encuentra adscrito. Si no la encuentra en la lista puede agregarla manualmente.
    </div>
    </div>
    <div class"row form-group">
       <div class="form-group  form-inline col-md-4">
               <label>País:</label>
               {!! Form::select('pais', $paises, null,['class'=> 'form-control']) !!}
           </div>
       <div class="form-group  form-inline col-md-8">
             <label>Institución:</label>
             {!! Form::select('institucion', $instituciones, null,['class'=> 'form-control']) !!}
       </div>
    </div>
    <div class="row form-group">
     <div class="form-inline col-md-6 col-md-offset-6">
        <label>
        <input type="checkbox" id="agregarInstitucion" value="1" data-toggle="modal" data-target="#myModal"> Mi institución no se encuentra en la lista</label>
        </div>
    </div>
     <div class"row form-group">
           <div class="form-group  form-inline col-md-12">
                    <label>Nombre del Departamento, sección, unidad, etc., donde desempeña sus actividades:</label>
                   {!! Form::text('departamento',null, ['class'=> 'form-control']) !!}
               </div>
     </div>
     <div class"row">
           <div class="form-group  form-inline col-md-12">
                 <label>Nombramiento (categoria y nivel):</label>
                 {!! Form::text('nombramiento',null, ['class'=> 'form-control']) !!}
           </div>
    </div>
    <div class="row form-group">
         <div class="form-inline col-md-12">
             <label>¿Dirige un grupo de investigación?:</label>
             {!! Form::select('grupo', ['0' => 'No', '1' => 'Sí'],null,['class'=> 'form-control', 'id' => 'grupoInv']) !!}
        </div>
    </div>
    @include('datosGrupo')
    <div class="row form-group">
         <div class="form-group col-md-2 col-md-offset-5">
                 {!! Form::submit('Guardar Cuestionario',['class' => 'btn btn-success btn-block', 'id' => 'btnAddGrupo']) !!}
         </div>
    </div>
{!! Form::close() !!}