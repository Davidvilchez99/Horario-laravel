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
                <h2>Crear hora</h2>
                <a href="/horas">Ver horas</a>
    <div>
    <form action="/horas/crear" method ="POST">
    @csrf
        <select name="horaH" id="horaH">
            <option value="1">8:15-9:15</option>
            <option value="2">9:15-10:15</option>
            <option value="3">10:15-11:15</option>
            <option value="4">11:45-12:45</option>
            <option value="5">12:45-1:45</option>
            <option value="6">1:45-2:45</option>
        </select>
        <select name="diaH" id="diaH">
            <option value="1">Lunes</option>
            <option value="2">Martes</option>
            <option value="3">Miércoles</option>
            <option value="4">Jueves</option>
            <option value="5">Viernes</option>
        </select>
        <select name="codAsignatura" id="codAsignatura">
        @foreach ($asignaturas as $asignatura)
            <option value="{{$asignatura->codAs}}">{{$asignatura->nombreAs}}</option>
        @endforeach
        </select>
    <input type="submit" value="Guardar">
</form>
    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>