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
        {!! Form::radio('genero',0, ['class'=> 'form-control']) !!}Hombre</label>
         <label class="radio-inline">
        {!! Form::radio('genero',1, ['class'=> 'form-control']) !!}Mujer</label>
    </div>
</div>
<div class="row">
    <div class="form-group  form-inline col-md-4">
        <label>Email (Institucional):</label>
        {!! Form::email('emailI',null,['class'=> 'form-control']) !!}
    </div>
    <div class="form-group  form-inline col-md-4">
        <label>Email (Personal):</label>
        {!! Form::email('emailP',null,['class'=> 'form-control']) !!}
    </div>
  </div>
<div class="row">
    <div class="form-group  form-inline col-md-4">
        <label>Grado de estudios:</label>
        {!! Form::select('grado',['bachillerato'=>'Bachillerato', 'licenciatura'=>'Licenciatura', 'maestria'=>'Maestria', 'doctorado'=>'Doctorado'],null,['class'=> 'form-control']) !!}
    </div>
    <div class="form-group  form-inline col-md-6">
        <label>País donde obtuvo el grado:</label>
        {!! Form::select('paisGrado', $paises, null,['class'=> 'form-control']) !!}
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
            <div class="form-group  form-inline col-md-6">
                <label>Nombramiento del SNI:</label>
                {!! Form::select('sni', ['0' => '[No es miembro]', 'candidato'=>'Candidato', '1'=>'SNI 1', '2'=>'SNI 2', '3'=>'SNI 3', '4'=>'Emérito'],null,['class'=> 'form-control']) !!}
            </div>
             <div class="form-group  form-inline col-md-6">
                    <label>Pertenece a un cuerpo académico de acuerdo al PRODEP:</label>
                    {!! Form::select('prodep', ['0' => 'No', '1'=>'Si'],null,['class'=> 'form-control', 'id' => 'selectProdep']) !!}
            </div>
  </div>
    <div class="hidden row" id="nameProdep">
                <div class="form-group  form-inline col-md-6">
                        <label>Nombre del cuerpo académico del PRODEP:</label>
                        {!! Form::text('nombreProdep',null, ['class'=> 'form-control']) !!}
                </div>
     </div>
   <div class="row">
              <div class="form-group  form-inline col-md-4">
                  <label>Area del PECITI:</label>
                  {!! Form::select('areaPeciti', ['0'=>'n/a', '1' => 'Ambiente', '2'=>'Conocimiento del Universo', '3'=>'Desarrollo Sustentable', '4'=>'Desarrollo Tecnológico', '5'=>'Energía', '6'=>'Salud', '7'=>'Sociedad'],null,['class'=> 'form-control']) !!}
              </div>
               <div class="form-group  form-inline col-md-4">
                      <label>Area del SNI:</label>
                      {!! Form::select('areaSni', ['0'=>'n/a', '1' => 'Biología y Química', '2'=>'Ciencias Agropecuarias y Biotecnología', '3'=>'Ciencias Físico Matemáticas y Ciencias de la Tierra', '4'=>'Ciencias Sociales', '5'=>'Humanidades y Ciencias de la Conducta', '6'=>'Ingeniería y Tecnología', '7'=>'Medicina y Ciencias de la Salud'],null,['class'=> 'form-control', 'id' => 'areaSni']) !!}
              </div>
               <div class="form-group  form-inline col-md-4">
                      <label>Campo del Conocimiento(SNI):</label>
                      {!! Form::select('areaConocimiento',['0'=>'n/a'], null,['class'=> 'form-control', 'id' => 'areaConocimiento']) !!}
               </div>
    </div>
    <div class="row">
        <div class="form-group  form-inline col-md-4">
            <label>No. de RCEA:</label>
            {!! Form::text('numeroRcea', null, ['class'=> 'form-control']) !!}
        </div>
        <div class="form-group  form-inline col-md-4">
            <label>No. de CVU:</label>
            {!! Form::text('numeroCvu', null,['class'=> 'form-control']) !!}
        </div>
    </div>
     <div class="row">
                     <div class="form-group col-md-2 col-md-offset-5">
                             {!! Form::submit('Guardar Cuestionario',['class' => 'btn btn-success btn-block', 'id'=>'btnAddPersonales']) !!}
                     </div>
          </div>

{!! Form::close() !!}


