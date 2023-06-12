
<div wire:ignore.self class="modal" tabindex="-1" role="dialog" id="edit{{$frm_data->id}}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if(session()->has('good'))
                    <div class="alert alert-success" style="width: 100%; text-align: center; ">
                        {{ session('good') }}
                    </div>
                @elseif(session()->has('bad'))
                    <div class="alert alert-danger" style="width: 60%; ">
                        {{ session('bad') }}
                    </div>
                @endif
                <form style="width: 96%; margin-left: 2%;">
                    <div style="display: flex;">
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
                    <input type="text" class="form-control" placeholder="USN" wire:model="usn">
                    @error('usn')
                    <p class="text-red-500 text-xs p-1" style="color: red;">{{$message}}</p>
                    @enderror
                    <button type="button" class="btn btn-primary" style="width: 70%; margin-left: 15%; margin-top: 5%;" wire:click="submit_edit({{$frm_data->id}})" >Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
