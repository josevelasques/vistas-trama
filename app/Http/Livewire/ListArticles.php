<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ListArticles extends Component
{
    public $users;
    public $form;

    protected $listeners = [
        'creado' => 'actualizarListaArticulos',
        'cancelado' => 'ocultarForm',

    ];

    public function mount()
    {
        $this->form = false;
        $this->users = User::get();
    }

    public function viewUser($id)
    {
        $this->emitTo('user-detail', 'selectedUser', $id);
    }



    public function mostrarForm()
    {
        $this->form = true;
    }

    public function ocultarForm()
    {
        $this->form = false;
    }

    public function actualizarListaArticulos()
    {
        $this->dispatchBrowserEvent('articuloCreado');
    }

    public function render()
    {
        return view('livewire.articulos.list-articles');
    }
}
