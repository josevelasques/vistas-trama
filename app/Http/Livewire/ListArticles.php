<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class ListArticles extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::get();
    }

    public function viewUser($id)
    {
        $this->emitTo('user-detail', 'selectedUser', $id);
    }

    public function render()
    {
        return view('livewire.list-articles');
    }
}
