<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserDetail extends Component
{
    public $user;
    protected $listeners = [
        'selectedUser' => 'mount',
    ];

    public function mount($user = null)
    {

        $this->user = $user;
    }

    public function render()
    {
        return view('livewire.user-detail');
    }
}
