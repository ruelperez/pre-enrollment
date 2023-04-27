
<div wire:ignore.self class="modal" tabindex="-1" role="dialog" id="adminReg_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Admin Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="submit_reg_admin" style="width: 60%; margin-left: 20%;">
                    <div class="mb-3">
                        <input type="text" class="form-control" wire:model="role" hidden>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="First Name" wire:model="first_name" required>
                    </div>
                    @error('first_name')
                    <p class="text-red-500 text-xs p-1">{{$message}}</p>
                    @enderror
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Last Name" wire:model="last_name" required>
                    </div>
                    @error('last_name')
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
                        <input type="text" class="form-control" placeholder="Repeat Paaword" wire:model="password_confirmation" required>
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
