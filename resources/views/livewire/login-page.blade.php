<div style="width: 30%; margin-left: 3%;">
    @include('modal.new_student_reg')
    <h2 STYLE="color: darkblue; text-align: center;">STUDENT LOGIN</h2>
    <button wire:click="btn_old" type="button" class="btn btn-primary" style="width: 80%; margin-left: 10%; margin-top: 10px; background-color: darkblue;">Old Student</button>
    @if($a == 1)
        @if(session()->has('loginError'))
            <div class="alert alert-danger" style="width: 70%; padding: 10px; margin-left: 15%; font-size: 14px; margin-top: 10px; text-align: center;">
                {{session('loginError')}}
            </div>
        @endif
        <div style="margin-top: 15px; margin-left: 29%;">
            <input type="text" placeholder="USN NO." wire:model="usn">
            <input type="text" wire:model="usn" hidden>
        </div>
        <button type="button" class="btn btn-primary" style="width: 25%; margin-left: 38%; margin-top: 10px;" wire:click="submit_usn">Submit</button>
    @endif
    <button wire:click="btn_new" type="button" class="btn btn-primary" style="width: 80%; margin-left: 10%; margin-top: 30px; background-color: darkblue;">New Student</button>
    @if(session()->has('loginFailed'))
        <div class="alert alert-danger" style="width: 60%; padding: 10px; margin-left: 20%; margin-top: 10px; text-align: center;">
            {{session('loginFailed')}}
        </div>
    @endif
    @if($b == 1)
        <div style="margin-left: 10%; width: 80%; text-align: center; margin-top: 15px;">
            <form>
                <input type="text" placeholder="Username" style="margin-bottom: 10px;" wire:model="username">
                <input type="text" placeholder="Password" style="margin-bottom: 10px;" wire:model="password">
                <button wire:click="submit_login" type="button" class="btn btn-primary" style="width: 77%;">Login</button>
            </form>
            <p class="text-center mt-3 mb-0">Do not have an account? <b><u style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#reg_modal" >Register here</u></b></p>
        </div>
    @endif
</div>
