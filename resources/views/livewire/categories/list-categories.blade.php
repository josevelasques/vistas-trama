<div class='card'>
    @if ($form)
        @livewire('category-form')
    @endif
    <div class="card-header">
        <h5 class="card-title">Lista de Artículos <a class="btn btn-primary" wire:click="mostrarForm"><i
                    class="fas fa-plus"></i> Nuevo Artículo</a></h5>
    </div>
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $cat)
                <tr>
                    <td>{{ $cat->name }}</td>
                    <td>{{ $cat->description }}</td>
                    <td>
                        <div class="btn-group">
                            <button wire:click='' class="btn btn-primary"><i
                                    class="fas fa-check-circle"></i></button>
                            <button class="btn btn-danger"><i class="fas fa-times-circle"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
