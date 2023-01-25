<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
input[type=text], select {
   width: 100%;
   padding: 12px 20px;
   margin: 8px 0;
   display: inline-block;
   border: 1px solid #ccc;
   border-radius: 4px;
   box-sizing: border-box;
}
input[type=submit] {
   width: 100%;
   background-color: #4CAF50;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   border-radius: 4px;
   cursor: pointer;
}
input[type=submit]:hover {
   background-color: #45a049;
}
 /* div {
   border-radius: 5px;
   background-color: #f2f2f2;
   padding: 20px;
} */
</style>
</style>
<body>
    <a href="/asignaturas">Ver listado de asignaturas</a>
    <br>
    <h2>Editar asignatura</h2>
    <div>
    <form action="/asignaturas/editar/{{ $asignatura->codAs}}" method ="POST">
      @csrf
      {{ method_field('PUT') }}
      <input type="hidden" value="{{ $asignatura->codAs}}" name="codAs">
      <input type="hidden" value="{{ $asignatura->user_id}}" name="user_id">
      <!-- <input type="hidden" value="{{ Auth::user()->id }}" name="user_id"> -->
      <label>Nombre:</label>
      <input type="text" name="nombreAs" placeholder="Nombre de la asignatura" value="{{ $asignatura->nombreAs}}">
      <label>Nombre corto:</label>
      <input type="text" name="nombreCortoAs" placeholder="Nombre corto de la asignatura" value="{{ $asignatura->nombreCortoAs}}">
      <label>Profesor:</label>
      <input type="text" name="profesorAs" placeholder="Profesor de la asignatura" value="{{ $asignatura->profesorAs}}">
      <label>Color:</label>
      <input type="color" name="colorAs" placeholder="Color de la asignatura" value="{{ $asignatura->colorAs}}">
      <input type="submit" value="Guardar">
   </form>
</form>
    </div>
</body>
</html>