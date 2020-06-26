<div>

    @if($updateMode)
    @include('livewire.user.update')
    @else
    @include('livewire.user.create')
    @endif
    <table class="table table-striped table-bordered mt-3">
        <thead>
            <tr class="bg-gray-200">
                <th class="text-center">#</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Email</th>
                <th class="text-center">Rol</th>
                <th class="text-center">acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
            <tr class="text-center">
                <td class="text-center">{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->roles[0]['nombre'] }}</td>
                <td class="text-center">
                    <button wire:click="edit({{ $item->id }})" class="btn btn-success">Editar</button>
                    <button wire:click="destroy({{ $item->id }})" class="btn btn-danger">Borrar</button>
                </td>
            </tr>
            @empty
            <tr class="text-center">
                <td colspan="4" class="py-3 italic">No hay información</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>