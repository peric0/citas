<x-admin-layout 
title="Dasboard | Sistema"
:breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Prueba',
    ],
]">
    <x-wire-button>Prueba</x-wire-button>
</x-admin-layout>
