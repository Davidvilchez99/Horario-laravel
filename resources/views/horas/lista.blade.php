<style>
    th, td{
        border: solid 1px black;
    }
    .py-12{
        display: flex;
        justify-content: center;
    }
    th{
        background-color: black;
        color: white;
    }
    table{
       margin: 5%;
    }
    td{
        border-radius: 20px;
        border: 1px solid black;
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
                <h2 id="crear"><a href="/horas/crear">Asignar hora</a></h2>
    <div>
    <table>
        <tr>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <?php
            $indice = 0;
            for($i = 1; $i < 7; $i++){
                  echo "<tr>";
                  for($j = 1; $j < 6; $j++){
                        if(isset($horasCompletas[$indice]) && ($i == $horasCompletas[$indice]->horaH) && ($j == $horasCompletas[$indice]->diaH)){
                              echo '<td style=background-color:'.$horasCompletas[$indice]->colorAs.'>'.$horasCompletas[$indice]->nombreCortoAs.'</td>';
                              $indice++;
                        }else{
                              echo "<td style='padding: 15px;'></td>";
                        }
                  }
                  echo "</tr>";
            }
      ?>
    </table>
    <table>
        <tr>
            <!-- <th>Código</th>
            <th>Id usuario</th> -->
            <th>Dia</th>
            <th>Hora</th>
            <th>Asignatura</th>
            <th>Acciones</th>
        </tr>
        @foreach ($horasCompletas as $horaCompleta)
            <tr>
            <td>{{ $horaCompleta->diaH }}</td>
            <td>{{ $horaCompleta->horaH }}</td>
            <td>{{ $horaCompleta->nombreAs }}</td>
            <td>
            <a href="/horas/eliminar/{{$horaCompleta->diaH}}/{{$horaCompleta->horaH}}/{{$horaCompleta->codAsignatura}}" onclick="return eliminarHora('Eliminar Hora')"> Eliminar</a>
            </td>
    </tr>
    @endforeach
    </table>
</div>
                </div></div></div></div>
    
    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function eliminarHora(value) {
        action = confirm(value) ? true : event.preventDefault()
    }
</script>
</x-app-layout>