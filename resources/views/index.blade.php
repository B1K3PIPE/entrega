<!DOCTYPE html>
<html>
<head>
    <title>Alumnos</title>
</head>
<body>
    <h1>Lista de Alumnos</h1>
    @foreach ($alumnos as $alumno)
        <h2>{{ $alumno->nombre }} {{ $alumno->apellidos }}</h2>
        <ul>
            @foreach ($alumno->modulos as $modulo)
                <li>{{ $modulo->nombre }}</li>
            @endforeach
        </ul>
    @endforeach
</body>
</html>