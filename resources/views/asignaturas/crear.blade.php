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

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Horario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <h2>Crear asignatura</h2>
                <a href="/asignaturas">Ver asignaturas</a>
    <div>
    <form action="/asignaturas/crear" method ="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombreAs" placeholder="Nombre de la asignatura">
    <label>Nombre corto:</label>
    <input type="text" name="nombreCortoAs" placeholder="Nombre corto de la asignatura">
    <label>Profesor:</label>
    <input type="text" name="profesorAs" placeholder="Profesor de la asignatura">
    <label>Color:</label>
    <input type="color" name="colorAs" placeholder="Color de la asignatura">
    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
    <input type="submit" value="Guardar">
</form>
    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

