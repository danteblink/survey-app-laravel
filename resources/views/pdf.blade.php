<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Example 1</title>
    <link rel="stylesheet" href="assets/css/style-pdf.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="assets/images/logo.png">
      </div>
      <h1>RED GLICOCIENCIA EN SALUD</h1>
    </header>
<div>
    <p align="right"><b>Investigador:</b> {{$user -> name}}</p>
    <p align="right"><b>Email:</b> {{$user -> email}}</p>
</div>
<div>
    <h3> Datos personales</h3>
@if (isset($personales))
    <p>CURP: {{ $personales -> curp }}</p>
    <p>Teléfono: {{ $personales -> telefono }}</p>
    <p>Género: {{ $personales -> genero }}</p>
    <p>Grado: {{ $personales -> grado }}</p>
    <p>SNI: {{ $personales -> sni }}</p>
    @if ($personales -> prodep == 1)
    <p>Prodep: {{ $personales -> nombreProdep }}</p>
    @endif
@endif
</div>
@if (isset($grupos))
<div>
    <h3>Datos laborales </h3>
    <p>Institución: {{ $institucion -> nombre }}</p>
    <p>Web: {{ $institucion -> web }}</p>
    <p>Departamento: {{ $grupos -> departamento }}</p>
    <p>Nombramiento: {{ $grupos -> nombramiento }}</p>
</div>
@if ($grupos->grupo == 1)

<div>
    <h3>Miembros del grupo de investigación</h3>
    @foreach ($miembros as $miembro)
    <p>Nombre: {{ $miembro -> nombre }}   &nbsp; &nbsp;  CURP: {{ $miembro -> curp }}  &nbsp;  &nbsp;   Grado: {{ $miembro -> grado }}</p>

@endforeach
</div>
@endif
@endif
<div>
    <h3>Investigación </h3>
    <h4>Sectores</h4>
@foreach ($sectores as $sector)
@if ($sector->name == 'Otros')
    {{ $sector->name }} ({{ $otros_sectores->name}})
@else
    {{ $sector->name }},
@endif
@endforeach
<div>
    <h4>Lineas de investigación</h4>
    @foreach ($lineas as $linea)
    @if ($linea->name == 'Otros')
        {{ $linea->name }} ({{ $otras_lineas->name}})
    @else
        {{ $linea->name }},
    @endif
    @endforeach
</div>

<div>
    <h4>Proyectos</h4>
    @foreach ($proyectos as $proyecto)
    <p>{{$proyecto -> name}}</p>
    @endforeach
</div>
<div>
    <h4>Publicaciones</h4>
    @foreach ($publicaciones as $publicacion)
    <p>{{$publicacion -> name}}</p>
    @endforeach
</div>
<div>
    <h4>Patentes</h4>
    @foreach ($patentes as $patente)
    <p>{{$patente -> name}}</p>
    @endforeach
</div>
<div>
    <h4>Vinculaciones</h4>
    @foreach ($vinculaciones as $vinculacion)
    <p>{{$vinculacion -> name}}</p>
    @endforeach
</div>
</div>
<div>
    <h3>Infraestructura</h3>
    <div>
        @foreach ($equipos as $equipo)
            <p>{{$equipo -> name}}</p>
        @endforeach
    </div>
</div>
</body>
</html>