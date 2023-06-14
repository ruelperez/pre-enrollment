
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
                <form wire:submit.prevent="submit_reg_student" style="width: 96%; margin-left: 2%;">
                    <div style="display: flex;">
                        <div class="mb-3">
                            <input type="text" class="form-control" hidden placeholder="class" wire:model="class">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="First Name" wire:model="first_name" required>
                        </div>
                        @error('first_name')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                        @enderror
                        <div class="mb-3" style="margin-left: 2%;">
                            <input type="text" class="form-control" placeholder="Last Name" wire:model="last_name" required>
                        </div>
                        @error('last_name')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                        @enderror
                        <div class="mb-3" style="margin-left: 2%;">
                            <input type="text" class="form-control" placeholder="Middle Name" wire:model="middle_name">
                        </div>
                        @error('middle_name')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div style="display: flex;">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="birthday" wire:model="birthday" required>
                        </div>
                        @error('birthday')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                        @enderror
                        <div class="mb-3" style="margin-left: 2%; width: 18%;">
                            <input type="text" class="form-control" placeholder="Age" wire:model="age" required>
                        </div>
                        @error('age')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                        @enderror
                        <div class="mb-3" style="margin-left: 2%;">
                            <select class="form-select select11" aria-label="Default select example" wire:model="sex" required>
                                <option selected>Sex</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        @error('sex')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                        @enderror

                    </div>

                    <div style="display: flex;">
                        <div class="mb-3" style="width: 70%;">
                            <input type="text" class="form-control" placeholder="Address" wire:model="address" required>
                        </div>
                        @error('address')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                        @enderror
                        <div class="mb-3" style="margin-left: 2%; width: 25%;">
                            <input type="text" class="form-control" placeholder="Status" wire:model="status" required>
                        </div>
                        @error('status')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                        @enderror
                    </div>
                    <div style="display: flex">
                        <div class="mb-3" style="width: 69%">
                            <input type="text" class="form-control" placeholder="Last School (Complete Name)" wire:model="complete_school" required>
                        </div>
                        @error('complete_school')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                        @enderror
                        <div class="mb-3" style="width: 29%; margin-left: 2%;">
                            <input type="text" class="form-control" placeholder="Abbreviation" wire:model="abbreviation_school" required>
                        </div>
                        @error('abbreviation_school')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="mb-3" style="width: 60%; margin-left: 20%;">
                        <input type="text" class="form-control" placeholder="UserName" wire:model="username" required>
                    </div>
                    @error('username')
                    <p class="text-red-500 text-xs p-1">{{$message}}</p>
                    @enderror
                    <div class="mb-3" style="width: 60%; margin-left: 20%;">
                        <input type="text" class="form-control" placeholder="Password" wire:model="password" required>
                    </div>
                    @error('password')
                    <p class="text-red-500 text-xs p-1" style="color: red">{{$message}}</p>
                    @enderror
                    <div class="mb-3" style="width: 60%; margin-left: 20%;">
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
