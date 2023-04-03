<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Nuevo Proveedor</h3>
    </div>


    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="cuit-cuil">CUIT/CUIL</label>
                <input type="text" class="form-control" id="cuit-cul">
            </div>
            <div class="form-group">
                <label for="razon-social">Razón Social</label>
                <input type="text" class="form-control" id="razon-social">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="moneda">Moneda (Actualizaciones en base a moneda)</label>
                <select class = "form-control" name="moneda" id="moneda">
                    <option value="peso-argentino">PESO ARGENTINO</option>
                </select>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button type="submit" class="btn btn-secondary">Cancelar</button>
        </div>
    </form>
</div>
