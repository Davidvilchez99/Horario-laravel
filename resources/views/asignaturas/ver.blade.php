<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/asignaturas">Ver listado de asignaturas</a>
    <h2>Ver asignatura</h2>
    <div>
   <p> Código: {{ $asignatura->codAs}}</p>
   <p> Nombre: {{ $asignatura->nombreAs}}</p>
   <p> Nombre corto: {{ $asignatura->nombreCortoAs}}</p>
   <p> Profesor: {{ $asignatura->profesorAs}}</p>
   <p>Color: {{$asignatura->colorAs}}</p>
</div>
</body>
</html>