@extends('layout')

@section('content')
<div class="container">
	 @if (Session::has('message'))
            <div class="alert alert-info alert-dismissible" role="alert" id="alertGuardado">
                  <button type="button" class="close" href="#alertGuardado" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  {{ Session::get('message') }}
            </div>
        @endif
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Registro</div>

                <div class="panel-body">
                    {!! Form::open(['route' => 'auth/register', 'class' => 'form']) !!}

                        <div class="form-group">
                            <label>Nombre</label>
                            {!! Form::input('text', 'name', '', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            {!! Form::email('email', '', ['class'=> 'form-control']) !!}
                        </div>
                         <div class="form-group">
                            <label>Perfil</label>
                            {!! Form::select('perfil',['1'=>'Investigador', '2'=>"Estudiante de Posgrado"],null,['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Contraseña</label>
                            {!! Form::password('password', ['class'=> 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            <label>Confirmar contraseña</label>
                            {!! Form::password('password_confirmation', ['class'=> 'form-control']) !!}
                        </div>

                        <div>
                            {!! Form::submit('Enviar',['class' => 'btn btn-primary']) !!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection