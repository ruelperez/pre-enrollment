<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminLogin extends Component
{
    public $a=0, $b=0, $usn, $first_name, $last_name, $username, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.admin-login');
    }
}
