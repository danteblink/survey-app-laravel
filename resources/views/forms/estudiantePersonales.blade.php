<div class="col-xs-12" style="height:25px;"></div>
@if(isset($personales))
{!! Form::model($personales, ['route' => 'personales.update', $personales->user_id]) !!}
@else
{!! Form::open(['action' => 'personalesController@add', 'class' => 'form', 'method' => 'POST']) !!}
@endif
<div class="row">
    <div class="form-group form-inline col-md-4">
        <label>CURP</label>
        {!! Form::text('curp',null, ['class'=> 'form-control']) !!}
    </div>
    <div class="form-group  form-inline col-md-4">
        <label>Teléfono</label>
        {!! Form::tel('telefono',null, ['class'=> 'form-control', 'type'=> 'tel'] ) !!}
    </div>
    <div class="form-group form-inline col-md-4">
        <label>Género:</label>
        <label class="radio-inline">
        {!! Form::radio('genero','hombre', ['class'=> 'form-control']) !!}Hombre</label>
         <label class="radio-inline">
        {!! Form::radio('genero','mujer', ['class'=> 'form-control']) !!}Mujer</label>
    </div>
</div>
<div class="row">
    <div class="form-group  form-inline col-md-6">
        <label>Grado de estudios:</label>
        {!! Form::select('grado',['bachillerato'=>'Bachillerato', 'licenciatura'=>'Licenciatura', 'maestria'=>'Maestria', 'doctorado'=>'Doctorado'],null,['class'=> 'form-control']) !!}
    </div>
    <div class="form-group  form-inline col-md-6">
        <label>País donde obtuvo el grado:</label>
        {!! Form::select('paisGrado', $paises,'139',['class'=> 'form-control']) !!}
    </div>
  </div>
  <div class="row">
      <div class="form-group  form-inline col-md-8">
          <label>Institución en la que obtuvo el grado:</label>
          {!! Form::select('institucionGrado', $instituciones,null,['class'=> 'form-control', 'id'=>'optionsInstitucion']) !!}
      </div>
      <div class="form-group  form-inline col-md-4">
          <label>
          <input type="checkbox" id="agregarInstitucion" value="1" data-toggle="modal" data-target="#myModal"> Mi institución no se encuentra en la lista</label>
      </div>

  </div>
     <div class="row">
         <div class="form-group col-md-2 col-md-offset-5">
                 {!! Form::submit('Guardar Cuestionario',['class' => 'btn btn-success btn-block', 'id'=>'btnAddPersonales']) !!}
         </div>
      </div>

{!! Form::close() !!}
