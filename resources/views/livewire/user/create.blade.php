<div class="container">
    <div class="row">
        <!--  -->
        <div class="form-group col-md-4 col-sm-12">
            <label for="name">Nombre</label>
            <input wire:model="name" type="text" id="name" class="form-control">
            @error('name')
            <span class="text-danger  italic">{{ $message }}</span>
            @enderror
        </div>
        <!--  -->
        <div class="form-group col-md-4 col-sm-12">
            <label for="email">Correo</label>
            <input id="email" wire:model="email" type="text" class="form-control">
            @error('email')
            <span class="text-danger  italic">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group col-md-4 col-sm-12">
            <label for="rol">Rol</label>
            <select wire:model="rol" class="form-control js-select" name="rol" id="rol">
                <option value="1">Administrador</option>
                <option value="2">Vendedor</option>
            </select>
            @error('rol')
            <span class="text-danger  italic">{{ $message }}</span>
            @enderror
        </div>

        <div class="w-100">
            <div class="pt-5 text-right">
                <button wire:click="store()" class="btn btn-primary">Agregar cliente</button>
            </div>
        </div>
    </div>
</div>
@push('scripts')
<script>
    $(document).ready(function() {
        $('.js-select').select2();
    });
</script>
@endpush