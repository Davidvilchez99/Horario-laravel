<style>
    th, td{
        border: solid 1px black;
    }
    .py-12{
        display: flex;
        justify-content: center;
    }
    #crear{
        background-color: blue;
        border: 1px solid blue;
        color: white;
        border-radius: 5px;
        width: 40%;
    }
    #crear:hover{
        background-color: white;
        color: blue;
    }
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
                <h2>Listado de asignaturas</h2>
    <table>
        <tr>
            <!-- <th>Código</th>
            <th>Id usuario</th> -->
            <th>Nombre</th>
            <th>Nombre corto</th>
            <th>Profesor</th>
            <th>Color</th>
            <th>Acciones</th>
        </tr>
        @foreach ($asignaturas as $asignatura)
    <tr>
        <!-- <td>{{ $asignatura->codAs }}</td>
        <td>{{ $asignatura->user_id }}</td> -->
        <td>{{ $asignatura->nombreAs }}</td>
        <td>{{ $asignatura->nombreCortoAs }}</td>
        <td>{{ $asignatura->profesorAs }}</td>
        <?php
        echo '<td style=background-color:'. $asignatura->colorAs.'>';
        ?>
        <td>
            <a href="/asignaturas/ver/{{$asignatura->codAs}}">Ver</a>
            <a href="/asignaturas/editar/{{$asignatura->codAs}}">Editar</a>
            <a href="/asignaturas/eliminar/{{$asignatura->codAs}}" onclick="return eliminarAsignatura('Eliminar Asignaura')"> Eliminar</a>
        </td>
</tr>
@endforeach
<br>
<a id="crear" href="/asignaturas/crear">Nueva asignatura</a>
    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
    function eliminarAsignatura(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
</x-app-layout>