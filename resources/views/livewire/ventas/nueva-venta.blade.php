<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Nueva Venta</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>


    <div class="card-body" style="display: block;">

        @include('livewire.ventas.encabezado')

        <hr>

        @include('livewire.ventas.lista-detalles')
    </div>
</div>
