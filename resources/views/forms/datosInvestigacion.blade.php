<div class="col-xs-12" style="height:25px;"></div>
{!! Form::open(['action' => 'investigacionController@store', 'class' => 'form', 'id' => 'formInves', 'method' => 'POST']) !!}
    <div class="row form-group">
        <div class="col-md-12">
            <p> 1. Sector de impacto: Indicar a cuál(es) de los siguientes sectores o áreas de investigación impactan las líneas/proyectos que se desarrollan en su grupo:</p>
        </div>
        @foreach($sectores as $key => $value) <!-- Crea el checkbox a partir de la BD-->
            <div class="col-md-6" id="sectores">
                @if(in_array($value, $sectoresUser))  <!-- Si el sector esta en el array de los sectores del usuario -->
                <label>{!! Form::checkbox('sectores[]', $key, true, ['id' => 'sectores'.$key]) !!}{{$value}}</label>
                @else
                <label>{!! Form::checkbox('sectores[]', $key, false, ['id' => 'sectores'.$key]) !!}{{$value}}</label>
                @endif
            </div>
        @endforeach
       <div class="col-md-6 hidden" id="otrosSectoresDiv">
       	    @if (isset($otroSector))
            {!! Form::text('otrosSectores',$otroSector->name, ['class'=> 'form-control', 'placeholder'=> 'Ejemplo 1, ejemplo 2, ejemplo 3, ...']) !!}
            @else
            {!! Form::text('otrosSectores', null, ['class'=> 'form-control', 'placeholder'=> 'Ejemplo 1, ejemplo 2, ejemplo 3, ...']) !!}
            @endif
       </div>
    </div>
    <div class="row form-group">
        <div class="col-md-12">
            <p> 2. Líneas de investigación del grupo, marque todas las que apliquen. ¿Considera que sus líneas de investigación corresponden a? :</p>
        </div>
         @foreach($lineas as $key => $value) <!-- Crea el checkbox a partir de la BD-->
            <div class="col-md-6 ">
                @if(in_array($value, $lineasUser))
                <label>{!! Form::checkbox('lineas[]', $key, true, ['id' => 'lineas'.$key]) !!}{{$value}}</label>
                @else
                <label>{!! Form::checkbox('lineas[]', $key, false, ['id' => 'lineas'.$key]) !!}{{$value}}</label>
                @endif
            </div>
        @endforeach
        <div class="col-md-6 hidden" id="otrasLineasDiv">
             @if (isset($otraLinea))
             {!! Form::text('otrasLineas',$otraLinea->name, ['class'=> 'form-control', 'placeholder'=> 'Ejemplo 1, ejemplo 2, ejemplo 3, ...']) !!}
             @else
             {!! Form::text('otrasLineas', null, ['class'=> 'form-control', 'placeholder'=> 'Ejemplo 1, ejemplo 2, ejemplo 3, ...']) !!}
             @endif
       </div>
    </div>
    @include('proyectos')
    @include('publicaciones')
    @include('patentes')
    @include('vinculacion')
     <div class="row form-group">
         <div class="form-group col-md-2 col-md-offset-5">
                 {!! Form::submit('Guardar Cuestionario',['class' => 'btn btn-success btn-block', 'id' => 'btnAddInvestigacion']) !!}
         </div>
     </div>
{!! Form::close() !!}