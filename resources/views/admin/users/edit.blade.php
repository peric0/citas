<x-admin-layout title="Usuarios | Sistema" :breadcrumbs="[
    [
        'name' => 'Dashboard',
        'href' => route('admin.dashboard'),
    ],
    [
        'name' => 'Usuarios',
        'href' => route('admin.users.index')
    ],
    [
        'name' => 'Editar',
    ]
]">

    <x-wire-card>
        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="space-y-4">
                <div class="grid lg:grid-cols-2 gap-4">
                    <x-wire-input name="name" label="Nombre" required :value="old('name', $user->name)"
                        placeholder="Ingrese el nombre del nuevo usuario" />

                    <x-wire-input name="email" label="Correo electrónico" type="email" requiered :value="old('email', $user->email)"
                        placeholder="Ingrese el correo electrónico" />

                    <x-wire-input name="password" label="Contraseña" type="password"
                        placeholder="Ingrese una contraseña" />

                    <x-wire-input name="password_confirmation" label="Confirmar contraseña" type="password"
                        placeholder="Confirmar la contraseña" />

                    <x-wire-input name="rut" label="RUT" requiered :value="old('rut', $user->rut)" placeholder="Ingrese RUT" />

                    <x-wire-input name="phone" label="Telefono" type="phone" requiered :value="old('phone', $user->phone)"
                        placeholder="Ingrese el numero telefonico" />
                </div>

                <x-wire-input name="address" label="Dirección" type="address" requiered :value="old('address', $user->address)"
                    placeholder="Ingrese direccion del usuario" />

                <x-wire-native-select label="Rol" name="role_id">
                    <option value="">Seleccione un rol</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}" @selected(old('role_id', $user->roles()->first()->id) == $role->id)>
                            {{ $role->name }}
                        </option>
                    @endforeach
                </x-wire-native-select>
            
            <div class="flex justify-end">
                <x-wire-button type=submit>Actualizar</x-wire-button>

            </div>
            </div>

        </form>
    </x-wire-card>


</x-admin-layout>
