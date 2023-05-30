<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, inicial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">  
        <title>Listado de usuarios</title>
    </head>
    <body>
        <h1>Usuario #{{ $user->id }}</h1>
        <p> Nombre del usuario: {{$user->name}}</p>
        <p> Correo del usuario: {{$user->email}}</p>

        <p>
            <a href="{{route('users')}}">regresar </a>
        </p>

    </body>
</html>