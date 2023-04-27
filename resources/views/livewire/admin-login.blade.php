<div style="width: 30%; margin-left: 3%;">
    @include('modal.admin_reg_modal')
    <h2 STYLE="color: darkblue; text-align: center;">ADMIN</h2>
    @if(session()->has('loginFailed'))
        <div class="alert alert-danger" style="width: 60%; padding: 10px; margin-left: 20%; text-align: center;">
            {{session('loginFailed')}}
        </div>
    @endif
    <div style="margin-left: 10%; width: 80%; text-align: center; margin-top: 15px;">
        <form>
            <input type="text" placeholder="Username" style="margin-bottom: 10px;" wire:model="username" required>
            <input type="text" placeholder="Password" style="margin-bottom: 10px;" wire:model="password" required>
            <button wire:click="submit_login" type="button" class="btn btn-primary" style="width: 77%;">Login</button>
        </form>
        <p class="text-center mt-3 mb-0">Do not have an account? <b><u style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#adminReg_modal" >Register here</u></b></p>
    </div>
</div>
