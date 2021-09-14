<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h2>¡Bienvenido a la Red de glicociencia en salud!</h2>

        <div>
            Gracias por registrarte en nuestro sistema. Es muy importante para nosotros que una vez que ingreses
            contestes el cuestionario que se te presentará de la forma más precisa posible. Da click en el siguiente enlace para confirmar 
            tu registro en nuestro sistema:
            {{ URL::to('register/verify/' . $confirmation_code) }}.<br/>

        </div>

    </body>
</html>