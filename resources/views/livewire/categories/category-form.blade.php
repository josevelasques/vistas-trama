<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Nueva Categoría</h3>
    </div>

    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input wire:model='name' type="text" class="form-control" id="nombre">
                @error('name')
                    <span style="color:red">{{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <input wire:model='description' type="text" class="form-control" id="descripcion">
            </div>
            <div class="form-group">
                <label for="actividad">Actividad</label>
                <select wire:model='activity' class="form-control" name="actividad" id="actividad">
                    @foreach ($activities as $id => $name)
                    <option value="{{$id}}">{{$name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="card-footer">
            <button type="button" wire:click='aceptar' class="btn btn-primary">Aceptar</button>
            <button type="button" class="btn btn-secondary">Cancelar</button>
        </div>
    </form>
</div>
