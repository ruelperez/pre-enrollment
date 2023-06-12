<?php

namespace App\Http\Livewire;

use App\Models\Newstudent;
use App\Models\User;
use App\Models\UsnList;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\Component;

class LoginPage extends Component
{
    public $a=0, $b=0, $last_school, $usn, $age, $address, $abbreviation_school, $complete_school, $status, $sex, $middle_name, $birthday, $first_name, $last_name, $username, $password, $password_confirmation;

    public function render()
    {
        return view('livewire.login-page');
    }

    public function btn_old(){

        if ($this->a == 0){
            $this->a = 1;
        }
        elseif ($this->a == 1){
            $this->a = 0;
        }
    }

    public function btn_new(){
        if ($this->b == 0){
            $this->b = 1;
        }
        elseif ($this->b == 1){
            $this->b = 0;
        }
    }

    protected $rules = [
        'last_school' => 'required|regex:/^\S+$/|not_regex:/\s/',
    ];

    public function submit_usn(){
        $un = UsnList::all();
        foreach ($un as $uns){
            if ($uns->id == $this->usn){
                $users = DB::table('users')
                    ->where('usn',$this->usn)
                    ->get();

                if (count($users) == 0){
                    $usn = UsnList::find($this->usn);
                    $pass = bcrypt($usn->id);

                    $data = User::create([
                        "usn" => $this->usn,
                        "first_name" => $usn->fname,
                        "last_name" => $usn->lname,
                        "username" => $usn->id,
                        "password" => $pass,
                    ]);

                    auth()->login($data);

                    return redirect('/student/home');

                }
                else{
                    $log =[
                        'username' => $this->usn,
                        'password' => $this->usn,
                    ];

                    if(auth()->attempt($log)){
                        return redirect('/student/home');
                    }
                }
            }
            else{
                session()->flash('loginError',"Wrong USN, If you don't have USN, you can tap NEW STUDENT button and create new account");
            }
        }
    }

    public function student_reg(){

    }

    public function submit_reg_student(){
        $this->last_school = $this->complete_school . " (" . $this->abbreviation_school . ")";

        $validated = $this->validate([
            "first_name" => 'required',
            "last_name" => 'required',
            "last_school" => 'nullable',
            "username" =>['required', Rule::unique('users','username')],
            "password" => 'required|confirmed|min:5',
            "middle_name" => 'nullable',
            "birthday" => 'required',
            "address" => 'required',
            "status" => 'required',
            "sex" => 'required',
            "age" => 'required',
        ]);

        $new = $this->validate([
            "first_name" => 'required',
            "last_name" => 'required',
            "last_school" => 'nullable',
            "middle_name" => 'nullable',
            "birthday" => 'required',
            "address" => 'required',
            "status" => 'required',
            "sex" => 'required',
            "age" => 'required',
        ]);

        $list = $this->validate([
            "first_name" => 'required',
            "last_name" => 'required',
            "middle_name" => 'nullable',
            "birthday" => 'required',
            "address" => 'required',
            "status" => 'required',
            "sex" => 'required',
            "age" => 'required',
            "usn" => 'nullable',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $user = User::create($validated);
        Newstudent::create($new);
        \App\Models\Studentinfo::create($list);
        auth()->login($user);

        return redirect('/student/home');
    }

    public function submit_login(){
        $validated = $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(auth()->attempt($validated)){
            return redirect('/student/home');
        }
        session()->flash('loginFailed',"Wrong Username/Password");
    }
}
