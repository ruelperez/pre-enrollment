<div class="div3">
    @include('modal.new_student_reg')
    <h2>STUDENT LOGIN</h2>
    <button wire:click="btn_old" type="button" class="btn btn-primary btnOld" >Old Student</button>
    @if($a == 1)
        @if(session()->has('loginError'))
            <div class="alert alert-danger oldAlert">
                {{session('loginError')}}
            </div>
        @endif
        <div class="div4">
            <input type="text" placeholder="USN NO." wire:model.defer="usn">
            <input type="text" wire:model.defer="usn" hidden>
        </div>
        <button type="button" class="btn btn-primary usnBtnSub" wire:click="submit_usn">Submit</button>
    @endif
    <button wire:click="btn_new" type="button" class="btn btn-primary newStudentBtn">New Student</button>
    @if(session()->has('loginFailed'))
        <div class="alert alert-danger newAlert">
            {{session('loginFailed')}}
        </div>
    @endif
    @if($b == 1)
        <div class="div5">
            <form>
                <input type="text" placeholder="Username" wire:model.defer="username">
                <input type="password" placeholder="Password" wire:model.defer="password">
                <button wire:click="submit_login" type="button" class="btn btn-primary">Login</button>
            </form>
            <p class="text-center mt-3 mb-0">Do not have an account? <b><u data-bs-toggle="modal" data-bs-target="#reg_modal" >Register here</u></b></p>
        </div>
    @endif
</div>
