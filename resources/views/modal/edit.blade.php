
<div wire:ignore.self class="modal" tabindex="-1" role="dialog" id="sub_edit{{$frm_data->id}}" style="text-align: left;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Update Subject</h5>
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
                <form>
                    <div class="mb-3" hidden>
                        <label class="form-label">Course ID</label>
                        <input type="text" class="form-control" wire:model.defer="course_id">
                    </div>
                    <div class="mb-3" hidden>
                        <label class="form-label">Year leve ID</label>
                        <input type="text" class="form-control" wire:model.defer="year_id">
                    </div>
                    <div class="mb-3" hidden>
                        <label class="form-label">Semester ID</label>
                        <input type="text" class="form-control" wire:model.defer="semester_id">
                    </div>
                    <div style="display: flex; margin-bottom: 20px;">
                        <div class="mb-3">
                            <label class="form-label">Course Description</label>
                            <input type="text" class="form-control" wire:model.defer="course_name">
                        </div>
                        <div class="mb-3" style="margin-left: 5%;">
                            <label for="exampleInputPassword1" class="form-label">Code</label>
                            <input type="text" class="form-control" wire:model.defer="code">
                        </div>
                    </div>
                    <div style="display: flex;">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Unit</label>
                            <input type="text" class="form-control" wire:model.defer="unit">
                        </div>
                        <div class="mb-3" style="margin-left: 5%;">
                            <label for="exampleInputPassword1" class="form-label">Day</label>
                            <input type="text" class="form-control" wire:model.defer="day">
                        </div>
                    </div>
                    <div style="margin-bottom: 20px; margin-left: 3%;">
                        @error('unit') <span style="color: red">{{ $message }}</span> @enderror
                    </div>
                    <div style="display: flex; margin-bottom: 20px;">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Time</label>
                            <input type="text" class="form-control" wire:model.defer="time">
                        </div>
                        <div class="mb-3" style="margin-left: 5%;">
                            <label for="exampleInputPassword1" class="form-label">Room</label>
                            <input type="text" class="form-control" wire:model.defer="room">
                        </div>
                    </div>
                    <div style="display: flex;">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Teacher</label>
                            <input type="text" class="form-control" wire:model.defer="teacher">
                        </div>
                        <div class="mb-3" style="margin-left: 5%;">
                            <label for="exampleInputPassword1" class="form-label">Tuition Fee</label>
                            <input type="text" class="form-control" wire:model.defer="tuition">
                        </div>
                    </div>
                    <div style="margin-bottom: 20px; margin-left: 50%;">
                        @error('tuition') <span style="color: red">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3" style="width: 47%;">
                        <select class="form-select" aria-label="Default select example" style="text-align: center" wire:model.defer="modality">
                            <option selected>Select Modality</option>
                            <option value="f2f">F2F</option>
                            <option value="online">Online</option>
                        </select>
                    </div>
                    <div style="margin-left: 50%;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="close">Close</button>
                        <button type="submit" class="btn btn-primary" wire:click="sub_edit" style="margin-left: 10%; width: 50%;">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
