<div class="col-xs-12" style="height:25px;"></div>
@if(isset($datosEstudiante))
{!! Form::model($datosEstudiante, ['class' => 'form-horizontal', 'route' => 'estudiante.update', $datosEstudiante->user_id]) !!}
@else
{!! Form::open(['action' => 'estudianteController@add', 'class' => 'form-horizontal', 'method' => 'POST']) !!}
@endif
       <div class="form-group ">
               <label class="col-md-4">Estudiante de maestría o doctorado:</label>
           <div class="col-md-8">
               {!! Form::select('posgrado',['maestria' => 'Maestría', 'doctorado' => 'Doctorado'], null, ['class'=> 'form-control']) !!}
           </div>
       </div>
     <div class="form-group">
             <label class="col-md-4">Programa docente en el que realiza el posgrado:</label>
             <div class="col-md-8">
                {!! Form::text('programa',null,['class'=> 'form-control']) !!}
             </div>
     </div>
    <div class="form-group">
             <label class="col-md-4">Nombre completo del tutor:</label>
             <div class="col-md-8">
                {!! Form::text('tutor',null,['class'=> 'form-control', 'placeholder'=> 'Ej. Nombre(s), Apellido Paterno, Apellido Materno']) !!}
            </div>
    </div>
    <div class="form-group">
             <label class="col-md-4">Proyecto que está realizando:</label>
             <div class="col-md-8">
                {!! Form::text('proyecto',null,['class'=> 'form-control']) !!}
             </div>
    </div>
    <div class="form-group">
         <div class="col-md-2 col-md-offset-5">
                 {!! Form::submit('Guardar Cuestionario',['class' => 'btn btn-success btn-block', 'id' => 'btnAddEstudiante']) !!}
         </div>
    </div>
{!! Form::close() !!}