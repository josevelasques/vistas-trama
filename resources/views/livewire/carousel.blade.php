<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Marcas</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="carousel">
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
            @livewire('carousel-element')
        </div>
    </div>
</div>


@section('css')
<style>
    .carousel {
        display: flex;
        padding: 25px 0px;
        list-style: none;
        overflow-x: scroll;
        scroll-snap-type: x mandatory;
    }

    .carousel-element {
        display: flex;
        flex-direction: column;
        flex: 0 0 100%;
        padding: 20px;
        border-radius: 12px;
        scroll-snap-align: start;
        transition: all 0.2s;
    }

    .carousel-element:not(:last-child) {
        margin-right: 10px;
    }

    .carousel-element .card-title {
        font-size: 20px;
    }

    .carousel-element .card-content {
        margin: 20px 0;
        max-width: 85%;
    }


    .carousel::-webkit-scrollbar {
        height: 12px;
    }

    .carousel::-webkit-scrollbar-thumb,
    .carousel::-webkit-scrollbar-track {
        border-radius: 92px;
    }

    .carousel::-webkit-scrollbar-thumb {
        background: #007bff;
    }

    .carousel::-webkit-scrollbar-track {
        background: lightgray;
    }

    @media (min-width: 700px) {
        .carousel-element {
            flex-basis: calc(calc(100% / 3) - 20px);
        }

        .carousel-element:not(:last-child) {
            margin-right: 30px;
        }
    }

    @media (min-width: 1100px) {
        .carousel-element {
            flex-basis: calc(25% - 30px);
        }

        .carousel-element:not(:last-child) {
            margin-right: 40px;
        }
    }
</style>
@endsection
