<div>
    <form id="venta">
        <div class="row">
            <div class="col-7">

                <div class="row">
                    <div class="form-group col-6">
                        <label>Fecha: 20/03/2023 18:52:26</label>
                        <label>Cajero: Admin Sys</label>
                        <label>Box: 5</label>
                    </div>
                    <div class="form-group col-6">
                        <label class="col-12">Código Venta: 5628</label>
                        <button type="" class="btn btn-primary">Imprimir Ticket</button>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="text-left">
                        <button type="" class="btn btn-danger">Cancelar</button>
                        <button type="" class="btn btn-light">Ver Pre-Ventas</button>
                        <button type="" class="btn btn-secondary">Pre-Venta</button>
                        <button type="" class="btn btn-primary">Finalizar Venta</button>
                    </div>
                </div>

                <hr>

                <div class="row align-items-end">
                    <div class="form-group col-8">
                        <label for="articulo">Artículo</label>
                        <input type="text" class="form-control" id="articulo">
                    </div>
                    <div class="form-group col-4">
                        <label for="cantidad">Cantidad</label>
                        <input type="number" min = 1 class="form-control" id="cantidad">
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="row">
                    <div class="col-4 bg bg-info text-center p-2">
                        <h3><b>Total:</b></h3>
                    </div>
                    <div class="col-8 bg bg-secondary text-center p-2">
                        <h3><b>$16456</b></h3>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <img class="w-100" src="https://www.w3schools.com/html/pic_trulli.jpg" alt="imagen">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        $('#articulo').focus();
        $('#cantidad').val('1');
    });

    $('#venta').submit(function(event) {
        event.preventDefault();
        let articulo = $('#articulo').val();
        let cantidad = $('#cantidad').val();
        let activeElementId = $(document.activeElement).attr('id');
        let focusElement = articulo === '' ? $('#articulo') : $('#cantidad');

        if (activeElementId === 'articulo' && articulo === '') {
            $('#cantidad').focus();
        } else if (activeElementId === 'cantidad' && articulo === '') {
            $('#articulo').focus();
        } else {
            toastr.info(articulo);
            $('#articulo').focus();
            $('#cantidad').val('1');
            $('#articulo').val('');
        }
    });
</script>
