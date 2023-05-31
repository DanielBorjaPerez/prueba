<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>edita el perfil</h1>

        @if ($errors->any())

            <div>
                <p>Por favor corriga los siguientes errores:</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>

            </div>

        @endif

        <form method="POST" action="{{route ('modificar',['id' => $user->id])}}">

            {!! csrf_field() !!}

            <label for="name">Nombre:</label>
            <input type="text" name="name"><br></br>

            <label for="email">Email:</label>
            <input type="email" name="email" value="{{ old('email') }}"><br></br>
            
            <label for="password">Contraseña:</label>
            <input type="password" name="password"><br></br>

            <button type="submit">Modificar usuario</button><br></br>
            <a href="{{route('users')}}">Volver a la lista de usuarios</a>
        </form>

    </body>
</html>