<div>
    @if($updateMode)
    @include('livewire.cliente.update')
    @else
    @include('livewire.cliente.create')
    @endif
    <table class="table table-striped table-bordered mt-3">
        <thead>
            <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">Nombre</th>
                <th class="text-center" scope="col">Docuemnto</th>
                <th class="text-center" scope="col">Correo</th>
                <th class="text-center" scope="col">Dirección</th>
                <th class="text-center" scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($data as $item)
            <tr>
                <td class="text-center">{{ $item->id }}</td>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->documento }}</td>
                <td>{{ $item->correo }}</td>
                <td>{{ $item->direccion }}</td>
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