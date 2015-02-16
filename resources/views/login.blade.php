<!DOCTYPE html>
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Ejemplo Tienda Web: login.php -->
<html lang="es">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Login Tienda Web</title>
    </head>
   <body>
    <div id='error'>
        @if(Session::has('mensaje'))
            {!! Session::get('mensaje') !!}
        @endif
    </div>
        <div id='login'>
            {!! Form::open(array('url'=>'login')) !!}
            <fieldset >
                <legend>Login</legend>

                <div class='campo'>
                    {!! Form::label('nombre', 'Nombre de usuario') !!}
                    {!! Form::text('nombre', 'Usuario') !!}
                </div>
                <div class='campo'>
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password') !!}
                </div>
                <div class='campo'>
                    {!! Form::submit('Acceder') !!}
                </div>
            </fieldset>
            {!! Form::close() !!}
    </body>
</html>