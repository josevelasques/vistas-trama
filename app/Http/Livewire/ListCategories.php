<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class ListCategories extends Component
{

    public $category, $categories;

    public function mount()
    {
        $this->form = false;
        $this->categories = $this->getCategories();
    }

    public function getCategories()
    {
        return Category::where('status', 'ACTIVO')->get();
    }

    public function mostrarForm()
    {
        $this->form = true;
    }

    public function ocultarForm()
    {
        $this->form = false;
    }

    public function actualizarListaCategorias()
    {
        $this->dispatchBrowserEvent('categoriaCreada');
    }

    public function render()
    {
        return view('livewire.categories.list-categories');
    }
}
