<x-admin-layout title="Usuarios | Sistema" :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Usuarios',
        'href' => route('admin.users.index'),
    ],
    [
        'name' => 'Nuevo',
    ],
]">

    <x-wire-card>
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div class="grid lg:grid-cols-2 gap-4">
                    <x-wire-input name="name" label="Nombre" required :value="old('name')"
                        placeholder="Ingrese el nombre del nuevo usuario" />

                    <x-wire-input name="email" label="Correo electrónico" type="email" requiered :value="old('email')"
                        placeholder="Ingrese el correo electrónico" />

                    <x-wire-input name="password" label="Contraseña" type="password" required
                        placeholder="Ingrese una contraseña" />

                    <x-wire-input name="password_confirmation" label="Confirmar contraseña" type="password" required
                        placeholder="Confirmar la contraseña" />

                    <x-wire-input name="rut" label="RUT" requiered :value="old('rut')" placeholder="Ingrese RUT" />

                    <x-wire-input name="phone" label="Telefono" type="phone" requiered :value="old('phone')"
                        placeholder="Ingrese el numero telefonico" />
                </div>

                <x-wire-input name="address" label="Dirección" type="address" requiered :value="old('address')"
                    placeholder="Ingrese direccion del usuario" />

                <x-wire-native-select label="Rol" name="role_id">
                    <option value="">Seleccione un rol</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @selected(old('role_id') == $role->id)>
                            {{ $role->name }}
                        </option>
                    @endforeach
                </x-wire-native-select>
            
            <div class="flex justify-end">
                <x-wire-button type=submit>Guardar</x-wire-button>

            </div>
            </div>

        </form>
    </x-wire-card>

</x-admin-layout>
