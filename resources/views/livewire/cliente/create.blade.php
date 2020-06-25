<div class="container">
    <div class="row">
        <!--  -->
        <div class="form-group col-md-6 col-sm-12">
            <label for="nombre">Nombre</label>
            <input wire:model="nombre" type="text" id="nombre" class="form-control">
            @error('nombre')
            <span class="text-danger  italic">{{ $message }}</span>
            @enderror
        </div>
        <!--  -->
        <div class="form-group col-md-6 col-sm-12">
            <label for="inputPassword4">Documento</label>
            <input wire:model="documento" type="text" id="documento" class="form-control">
            @error('documento')
            <span class="text-danger  italic">{{ $message }}</span>
            @enderror
        </div>

        <!--  -->
        <div class="form-group col-md-6 col-sm-12">
            <label for="correo">Correo</label>
            <input id="correo" wire:model="correo" type="text" class="form-control">
            @error('correo')
            <span class="text-danger  italic">{{ $message }}</span>
            @enderror
        </div>

        <!--  -->
        <div class="form-group col-md-6 col-sm-12">
            <label for="direccion">Dirección</label>
            <input wire:model="direccion" id="direccion" type="text" class="form-control">
            @error('direccion')
            <span class="text-danger  italic">{{ $message }}</span>
            @enderror
        </div>
        <!--  -->
        <div class="w-100">
            <div class="pt-5 text-right">
                <button wire:click="store()" class="btn btn-primary">Agregar cliente</button>
            </div>
        </div>
    </div>
</div>