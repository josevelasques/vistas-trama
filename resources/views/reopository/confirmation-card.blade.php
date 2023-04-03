<div class="card card-{{ $confirmator->class }} ">
    <div class="card-header ">
        <h4 class="card-title">{{ $confirmator->title }}</h4>
    </div>

    <div class="card-body">
        <h5><b>Mensaje:</b></h5>
        <h5> {{ $confirmator->message}} </h5>
    </div>

    @if (isset($confirmator->items))
    @foreach ($confirmator->items as $item)
    <p><b>{{ $item->clave }}</b> {{ $item->valor }}</p>
    @endforeach
    @endif

    <div class="card-footer text-center">
        <button wire:click='confirmOperation' class="btn btn-primary" type="button"> Confirmar</button>
        <button wire:click='cancelConfirmation' class="btn btn-secondary" type="button"> Cancelar</button>
    </div>

</div>
