<div>
    @if ($cardConfirmation)
        @include('reopository.confirmation-card')
    @else
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Nuevo Artículo</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Articulo</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="codigo" class="col-form-label col-3">Código</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="codigo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nombre" class="col-form-label col-3">Nombre</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="nombre">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" id="descripcion" rows="2"></textarea>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Artículo</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="actividad" class="col-form-label col-3">Actividad</label>
                                <div class="col-9">
                                    <select class="form-control" name="actividad" id="actividad">
                                        <option value="autoservicio">AUTOSERVICIO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="rubro" class="col-form-label col-3">Rubro</label>
                                <div class="col-9">
                                    <select class="form-control" name="rubro" id="rubro">
                                        <option value="generico-almacen">GENÉRICO ALMACÉN</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="marca" class="col-form-label col-3">Marca</label>
                                <div class="col-9">
                                    <select class="form-control" name="marca" id="marca">
                                        <option value="una-marca">UNA MARCA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="proveedor" class="col-form-label col-3">Proveedor</label>
                                <div class="col-9">
                                    <select class="form-control" name="proveedor" id="proveedor">
                                        <option value="un-proveedor">UN PROVEEDOR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Artículo</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="precio" class="col-form-label col-3">Precio</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="precio">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="agregado" class="col-form-label col-3">% Agregado</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="agregado">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="precio-venta" class="col-form-label col-3">Precio de Venta</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="precio-venta">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-3">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">Artículo</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="stock" class="col-form-label col-3">Stock</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="stock">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stock-minimo" class="col-form-label col-3">Stock Mínimo</label>
                                <div class="col-9">
                                    <input type="text" class="form-control" id="stock-minimo">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="presentacion" class="col-form-label col-3">Presentación</label>
                                <div class="col-9">
                                    <select class="form-control" name="presentacion" id="presentacion">
                                        <option value="unidad">UNIDAD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-center">
            <div class="btn-group">
                <button wire:click="requestConfirmation({{$accept = 'true'}})" type="submit" class="btn btn-primary">Aceptar</button>
                <button wire:click="requestConfirmation({{$accept = 'false'}})" type="submit" class="btn btn-secondary">Cancelar</button>
            </div>
        </div>

    </div>
    @endif
</div>
