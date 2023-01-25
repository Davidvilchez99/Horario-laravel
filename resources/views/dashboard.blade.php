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
                    Hola {{ Auth::user()->name }}
                    <hr>
                    <p>Aqui puede crear sus asignaturas y su horario</p>
                    <p>Aplicacion hecha con laravel y php</p>
                        <br>
                    <p>David Vilchez Almohalla </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
