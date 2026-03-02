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
    <form action="{{ route('admin.patients.update', $patient) }}" method="POST" class="space-y-6">
        @csrf
        @method('put')
        <x-wire-card class="mb-8">
            {{-- En este caso LG hace responsivo y se aplica a partir de una pantalla LG --}}
            <div class="lg:flex lg:justify-between lg:items-center">
                <div class="flex items-center space-x-5">
                    <img src="{{ $patient->user->profile_photo_url }}"
                        class="h-20 w-20 rounded-full object-cover object-center" alt="{{ $patient->user->name }}">

                    <div>
                        <p class="text-2xl font-bold text-gray-900">
                            {{ $patient->user->name }}
                        </p>
                    </div>
                </div>

                <div class="flex space-x-3 mt-6 lg:mt-0">
                    <x-wire-button outline gray href="{{ route('admin.patients.index') }}">Volver</x-wire-button>
                    <x-wire-button type="submit"><i class="fa-solid fa-check"></i>Guardar Cambios</x-wire-button>
                </div>
            </div>
        </x-wire-card>

        {{-- TABS --}}
        <x-wire-card>
            <div x-data="{ tab: 'datos-personales', }">
                <div class="border-b border-gray-200">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center text-body">
                        <li class="me-2">
                            <a href="#" 
                            x-on:click="tab = 'datos-personales'"
                            :class="{
                            'inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group': tab === 'datos-personales',
                            'inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group': tab !== 'datos-personales'

                        }"> 
                                <i class="fa-solid fa-user me-2"></i>
                                Datos personales
                            </a>
                        </li>
                        <li class="me-2">
                            <a href="#" x-on:click="tab = 'antecedentes'"
                            :class="{
                            'inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group': tab === 'antecedentes',
                            'inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group': tab !== 'antecedentes'

                        }">
                                <i class="fa-solid fa-file-lines me-2"></i>
                                Antecedentes
                            </a>
                        </li>
                        <li class="me-2">
                            <a href="#" x-on:click="tab = 'informacion-general'"
                            :class="{
                            'inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group': tab === 'informacion-general',
                            'inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group': tab !== 'informacion-general'

                        }">
                                <i class="fa-solid fa-info me-2"></i>
                                Información general
                            </a>
                        </li>
                        <li class="me-2">
                            <a href="#" x-on:click="tab = 'contactos-emergencia'"
                            :class="{
                            'inline-flex items-center justify-center p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500 group': tab === 'contactos-emergencia',
                            'inline-flex items-center justify-center p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 group': tab !== 'contactos-emergenciax|'

                        }"> 
                                <i class="fa-solid fa-heart me-2"></i>
                                Contactos de emergencia
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="px-4 mt-4">
                    <div x-show="tab === 'datos-personales'">
                        Datos personales
                    </div>
                    <div x-show="tab === 'antecedentes'">
                        Antecedentes
                    </div>

                    <div x-show="tab === 'informacion-general'">
                        informacion general
                    </div>

                    <div x-show="tab === 'contactos-emergencia'">
                        Contactos de emergencia
                    </div>
                </div>
            </div>
        </x-wire-card>


    </form>

</x-admin-layout>
