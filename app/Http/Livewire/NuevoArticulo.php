<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NuevoArticulo extends Component
{

    public $precioCompra;
    public $precioVenta;
    public $agregado;

    protected $listeners = [
        'compraChange' => 'limpiar',
        'agregadoChange' => 'actualizarVenta',
        'ventaChange' => 'actualizarAgregado'
    ];

    public function mount()
    {
        $this->dispatchBrowserEvent('evento', ['nombre' => 'Jose']);
    }

    public function limpiar()
    {
        $this->precioVenta = null;
        $this->agregado = null;
    }

    public function actualizarVenta()
    {
        $this->precioVenta = floatval($this->precioCompra) * (1 + floatval($this->agregado) / 100);
    }

    public function actualizarAgregado()
    {
        $this->agregado = 100 * (floatval($this->precioVenta) / floatval($this->precioCompra) - 1);
    }

    public function render()
    {
        return view('livewire.nuevo-articulo');
    }
}
