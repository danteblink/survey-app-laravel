

{!! Form::open(['action' => 'institucionController@store', 'class' => 'form', 'id' => 'addInstitucionForm', 'method' => 'POST']) !!}
    <div class="row">
           <div class="form-group  form-inline col-md-12">
                 <label>Nombre de la Institución:</label>
                 {!! Form::text('nombreInstitucion','', ['class'=> 'form-control']) !!}
           </div>
    </div>
    <div class="row">
           <div class="form-group  form-inline col-md-12">
                 <label>Dirección:</label>
                 {!! Form::text('direccionInstitucion','', ['class'=> 'form-control']) !!}
           </div>
    </div>
    <div class="row">
           <div class="form-group  form-inline col-md-12">
                 <label>Página web:</label>
                 {!! Form::text('webInstitucion','', ['class'=> 'form-control']) !!}
           </div>
    </div>
    <div class="row">
       <div class="form-group  form-inline col-md-12">
               <label>País:</label>
               {!! Form::select('paisInstitucion', $paises,'139',['class'=> 'form-control']) !!}
           </div>
    </div>

 {!! Form::close() !!}

