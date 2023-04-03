<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Confirmator;

class NuevoArticulo extends Component
{

    public $precioCompra, $precioVenta, $agregado;
    public $confirmator, $cardConfirmation;
    public $handleOperation;

    protected $listeners = [
        'compraChange' => 'limpiar',
        'agregadoChange' => 'actualizarVenta',
        'ventaChange' => 'actualizarAgregado',
    ];

    public function mount()
    {
        //$this->dispatchBrowserEvent('evento', ['nombre' => 'Jose']);
        $this->cardConfirmation = false;
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

    public function aceptar()
    {
        //metodos de persistencia
        $this->emitUp('creado');
    }

    public function cancelar()
    {
        //metodos de persistencia
        $this->emitUp('cancelado');
    }

    public function requestConfirmation($accept)
    {
        $confirmator = new Confirmator();
        $confirmator->class='info';
        $confirmator->title='Confirmar Operación';
        if($accept){
            $confirmator->message='Por favor, confirme la operación de alta de artículo';
        }else{
            $confirmator->message='¿Desea cancelar la operación de alta de artículo?';
        }

        $this->confirmator = $confirmator;
        $this->cardConfirmation = true;

    }

    public function confirmOperation()
    {
        /* TODO: Persistir */
        $this->emitUp('operacionConcluida', 'alertSuccess', "Alta de artículo finalizada correctamente");
    }

    public function cancelConfirmation()
    {
        $this->cardConfirmation = false;
        $this->dispatchBrowserEvent('alertInfo', [
            'operacion' => "Operación cancelada.",
        ]);
    }

    public function cancelarOperacion()
    {
        $this->mount();
        $this->emitUp('operacionConcluida', 'alertInfo', "Alta de artículo cancelada.");
    }

    public function render()
    {
        return view('livewire.articulos.nuevo-articulo');
    }
}
