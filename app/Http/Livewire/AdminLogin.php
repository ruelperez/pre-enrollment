<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Component;

class AdminLogin extends Component
{
    public $username, $password, $role='1', $password_confirmation, $first_name, $last_name;

    public function render()
    {
        return view('livewire.admin-login');
    }

    public function submit_login(){
        $validated = $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if(auth()->attempt($validated)){
            return redirect('/admin/home');
        }

        session()->flash('loginFailed',"Wrong Username/Password");
    }

    public function submit_reg_admin(){
        $validated = $this->validate([
            'role' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'username' => ['required', Rule::unique('users','username')],
            'password' => 'required|confirmed|min:5',
            'password_confirmation' => 'required'
        ]);

        $mf=0;
        $userData = User::all();

        foreach ($userData as $userD){
            if ($userD->role == 1){
                $mf++;
            }
        }

        if ($mf == 0){
            $validated['password'] = bcrypt($validated['password']);

            $user = User::create($validated);

            auth()->login($user);

            return redirect('/admin/home');
        }
        else{
            session()->flash('regFailed',"Failed to Register, Only 1 admin user is allowed");
            $this->first_name = "";
            $this->last_name = "";
            $this->username = "";
            $this->password = "";
            $this->password_confirmation = "";
        }
    }
}
