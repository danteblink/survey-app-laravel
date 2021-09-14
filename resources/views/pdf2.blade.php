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
    <p align="right"><b>Estudiante:</b> {{$user -> name}}</p>
    <p align="right"><b>Email:</b> {{$user -> email}}</p>
</div>
<div>
    <h3> Datos personales</h3>
    <p>CURP: {{ $personales -> curp }}</p>
    <p>Teléfono: {{ $personales -> telefono }}</p>
    <p>Género: {{ $personales -> genero }}</p>
    <p>Grado: {{ $personales -> grado }}</p>
</div>
<div>
    <h3> Datos estudiante</h3>
    <p>Posgrado: {{ $datosEstudiante -> posgrado }}</p>
    <p>Programa: {{ $datosEstudiante -> programa }}</p>
    <p>Tutor: {{ $datosEstudiante -> tutor }}</p>
    <p>Proyecto: {{ $datosEstudiante -> proyecto }}</p>
</div>
</body>
</html>