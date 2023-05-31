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
        <h1>{{ $title }}</h1>

        @if(!empty($users))
            <ul>
                @foreach ($users as $user)
                    <li>
                        {{ $user->name }} ⮕
                        <a href="{{ route('users.show',['id' => $user->id]) }}">ver detalles </a>

                    </li>
                @endforeach

                <br></br>

                <form method="get" action="{{url ('usuarios/crear')}}">

                {!! csrf_field() !!}
                <button type="submit">Crear usuario</button>
        </form>
            </ul>
        @else
        <p>No hay usuarios registrados</p>
        @endif

    </body>
</html>