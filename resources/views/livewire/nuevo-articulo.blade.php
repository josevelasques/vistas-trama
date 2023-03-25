<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Nuevo Artículo</h3>
    </div>


    <form>
        <div class="card-body">
            <div class="row">
                <div class="form-group col-4">
                    <label for="codigo">Código</label>
                    <input type="text" class="form-control" id="codigo">
                </div>
                <div class="form-group col-8">
                    <label for="descripcion">Descripción</label>
                    <input type="text" class="form-control" id="descripcion">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-12">
                    <label for="observaciones">Observaciones</label>
                    <input type="text" class="form-control" id="observaciones">
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="form-group col-6">
                    <label for="actividad">Actividad</label>
                    <select class = "form-control" name="actividad" id="actividad">
                        <option value="autoservicio">AUTOSERVICIO</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="rubro">Rubro</label>
                    <select class = "form-control" name="rubro" id="rubro">
                        <option value="generico-almacen">GENÉRICO ALMACÉN</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-6">
                    <label for="marca">Marca</label>
                    <select class = "form-control" name="marca" id="marca">
                        <option value="una-marca">UNA MARCA</option>
                    </select>
                </div>
                <div class="form-group col-6">
                    <label for="proveedor">Proveedor</label>
                    <select class = "form-control" name="proveedor" id="proveedor">
                        <option value="un-proveedor">UN PROVEEDOR</option>
                    </select>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="form-group col-4">
                    <label for="precio-compra">Precio de Compra</label>
                    <input wire:model="precioCompra" wire:change="$emitSelf('compraChange')" type="text" class="form-control" id="precio-compra">
                </div>
                <div class="form-group col-4">
                    <label for="agregado">% Agregado</label>
                    <input wire:model="agregado" wire:change="$emitSelf('agregadoChange')" type="text" class="form-control" id="agregado">
                </div>
                <div class="form-group col-4">
                    <label for="precio-venta">Precio de Venta</label>
                    <input wire:model="precioVenta" wire:change="$emitSelf('ventaChange')" type="text" class="form-control" id="precio-venta">
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="form-group col-3">
                    <label for="stock">Stock</label>
                    <input type="number" min=0 class="form-control" id="stock">
                </div>
                <div class="form-group col-3">
                    <label for="stock-minimo">Stock Mínimo</label>
                    <input type="number" min=0 class="form-control" id="stock-minimo">
                </div>
                <div class="form-group col-6">
                    <label for="presentacion">Presentación</label>
                    <select class = "form-control" name="presentacion" id="presentacion">
                        <option value="unidad">UNIDAD</option>
                    </select>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="form-group col-12">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control-file" id="imagen">
                </div>
            </div>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button type="submit" class="btn btn-secondary">Cancelar</button>
        </div>
    </form>
</div>

@push('js')
    <script>
        Livewire.on('evento', nombre => {
            console.log('hola');
        })
    </script>
@endpush

