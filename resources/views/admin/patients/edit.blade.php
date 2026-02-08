<x-admin-layout title="Pacientes | Sistema" :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Pacientes',
        'href' => route('admin.patients.index'),
    ],
    [
        'name' => 'Editar',
    ],
]">
    <x-wire-card>
        <div class="flex justify-between items-center">
            <div class="flex items-center space-x-5">
                <img src="{{ $patient->user->profile_photo_url }}"
                    class="h-20 w-20 rounded-full object-cover object-center" alt="{{ $patient->user->name }}">

                <div>
                    <p class="text-2xl font-bold text-gray-900">
                        {{ $patient->user->name }}
                    </p>
                </div>
            </div>

            <div class="flex space-x-3">
                <x-wire-button>Volver</x-wire-button>
                <x-wire-button>Guardar cambios</x-wire-button>

            </div>
        </div>
    </x-wire-card>

</x-admin-layout>
