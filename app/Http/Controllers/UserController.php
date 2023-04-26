<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //ADMIN
    public function store(Request $request){

        $validated = $request->validate([
            "role" => 'required',
            "first_name" => 'required',
            "last_name" => 'required',
            "username" =>['required', Rule::unique('users','username')],
            "password" => 'required|confirmed|min:5'
        ]);

        $userData = User::all();

        if (count($userData) == 0){
            $validated['password'] = bcrypt($validated['password']);

            $user = User::create($validated);

            auth()->login($user);

            return redirect('/admin/home')->with('message_user', 'welcome!!!');
        }
        else{
            return  redirect('/admin/register')->with('failed', 'Failed to register, Only 1 admin user is allowed');
        }


    }

    public function login(Request $request){

        $validated = $request->validate([
            "username" => 'required',
            "password" => 'required'
        ]);

        if(auth()->attempt($validated)){
            $request->session()->regenerate();

            return redirect('/admin/home');
        }
        return back()->withErrors(['username' => 'login failed']);
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    //STUDENT

}
