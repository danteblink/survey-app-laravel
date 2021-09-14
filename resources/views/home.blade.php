@extends('layout')

@section('content')
<div class="container">
	@if (Session::has('message'))
		 <div class="alert alert-success alert-dismissible" role="alert" id="alertGuardado">
			   <button type="button" class="close" href="#alertGuardado" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			   {{ Session::get('message') }}
		 </div>
	 @endif
	<div class="alert alert-success alert-dismissible collapse" role="alert" id="alertGuardado">
      <button type="button" class="close" data-toggle="collapse" href="#alertGuardado" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      Datos Guardados
    </div>
    <div class="alert alert-danger alert-dismissible collapse" role="alert" id="alertBorrado">
		  <button type="button" class="close" data-toggle="collapse" href="#alertBorrado" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  Datos eliminados
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Cuestionario</div>
				<div class="panel-body">
					<ul class="nav nav-tabs">
                      <li role="presentation" class="active"><a data-toggle="tab" href="#datosPersonales">Datos Personales</a></li>
                      <li role="presentation"><a data-toggle="tab" href="#datosInstitucion">Datos de la institución</a></li>
                      <li role="presentation"><a data-toggle="tab" href="#datosInvestigador">Investigación</a></li>
                      <li role="presentation"><a data-toggle="tab" href="#datosInfraestructura">Infraestructura</a></li>
                    </ul>

							<div class="tab-content">
								<div id="datosPersonales" class="tab-pane fade in active">
									@include('forms.datosPersonales')
								</div>
								<div id="datosInstitucion" class="tab-pane fade">
									@include('forms.datosInstitucion')
								</div>
								<div id="datosInvestigador" class="tab-pane fade">
									@include('forms.datosInvestigacion')
								</div>
								<div id="datosInfraestructura" class="tab-pane fade">
									@include('forms.datosEquipo')
								</div>
							</div>
					 @include('deleteModal')
					 @include('addInstitucionModal')
				</div>
			</div>
		</div>
	</div>
	<div class="row footer">
		<div class="col-md-4 col-md-offset-4 text-center text-muted">
			<small>Red Mexicana de Glicociencia en Salud v1.1. Todos los derechos reservados. Dudas, comentarios o sugerencias favor de contactarnos por email: <strong>dperez@uaem.mx</strong></small>
		</div>
		<div class="col-md-4 text-center">
        			 <a class="openAviso" data-toggle="modal" data-target="#myModalAviso">Aviso de privacidad</a>
		</div>
	</div>
	@include('avisoModal')
</div>

@endsection