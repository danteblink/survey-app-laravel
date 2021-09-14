<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Registro Red-Glicociencia</title>

    <!-- Bootstrap core CSS -->
    {!! Html::style('assets/css/bootstrap.css') !!}

    <!-- Custom styles for this template -->
    {!! Html::style('assets/css/cover.css') !!}



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Red-Glicociencia</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Inicio</a></li>
                  <li><a href="auth/login">Entrar</a></li>
                  <li><a href="auth/register">Registro</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">Registro para la Red Glicociencia en Salud</h1>
            <p class="lead">Bienvenidos. El sistema funcionará con base en la información proporcionada por los usuarios de la Red. Te pedimos de favor que una vez que te registres llenes cuidadosamente el cuestionario que se te presentará. ¡Gracias por tu apoyo!  </p>
            <p class="lead">
              <a href="/auth/register" class="btn btn-lg btn-default">Registrate</a>
            </p>
          </div>

          <div class="mastfoot">
            <div class="inner">

            </div>
          </div>

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Scripts -->
        {!! Html::script('assets/js/jquery-1.11.3.min.js') !!}
        {!! Html::script('assets/js/bootstrap.min.js') !!}
  </body>
</html>
