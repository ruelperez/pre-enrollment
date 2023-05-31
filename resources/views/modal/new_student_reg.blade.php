
<div wire:ignore.self class="modal" tabindex="-1" role="dialog" id="reg_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if(session()->has('dataAdded'))
                    <div class="alert alert-success" style="width: 100%; text-align: center; ">
                        {{ session('dataAdded') }}
                    </div>
                @elseif(session()->has('dataError'))
                    <div class="alert alert-danger" style="width: 60%; ">
                        {{ session('dataError') }}
                    </div>
                @endif
                <form wire:submit.prevent="submit_reg_student" style="width: 60%; margin-left: 20%;">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="First Name" wire:model="first_name" required>
                    </div>
                    @error('fname')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Last Name" wire:model="last_name" required>
                    </div>
                    @error('lname')
                    <p class="text-red-500 text-xs p-1">{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Last School Attended" wire:model="last_school" required>
                    </div>
                    @error('last_school')
                    <p class="text-red-500 text-xs p-1">{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="UserName" wire:model="username" required>
                    </div>
                    @error('username')
                    <p class="text-red-500 text-xs p-1">{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Password" wire:model="password" required>
                    </div>
                    @error('password')
                    <p class="text-red-500 text-xs p-1" style="color: red">{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Password Confirmation" wire:model="password_confirmation" required>
                    </div>
                    @error('password_confirmation')
                    <p class="text-red-500 text-xs p-1" style="color: red">{{$message}}</p>
                    @enderror
                    <button type="submit" class="btn btn-primary" style="width: 70%; margin-left: 15%;" >Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
