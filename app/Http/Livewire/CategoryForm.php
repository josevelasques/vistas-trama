<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Activity;
use App\Models\Category;

class CategoryForm extends Component
{

    public $activity, $activities;
    public $name, $description;

    public $rules = [
        'name' => 'required|string',
    ];

    public function mount()
    {
        $this->activities = $this->getActivities();
        $this->activity = $this->getFirstActivity();
    }

    public function getActivities()
    {
        return Activity::where('status', 'activo')->pluck('name', 'id');
    }

    public function getFirstActivity()
    {
        return Activity::first()->value('id');
    }

    public function aceptar()
    {
        $this->validate();

        Category::create([
            'name' => $this->name,
            'description' => $this->description,
            'activity_id' => $this->activity,
        ]);

        dd('creado');
    }

    public function render()
    {
        return view('livewire.categories.category-form');
    }
}
