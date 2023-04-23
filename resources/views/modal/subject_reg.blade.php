
<div wire:ignore.self class="modal" tabindex="-1" role="dialog" id="sub_reg">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertModalLabel">Subject Registration Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3" hidden>
                        <label class="form-label">Course ID</label>
                        <input type="text" class="form-control" wire:model="course_id">
                    </div>
                    <div class="mb-3" hidden>
                        <label class="form-label">Year leve ID</label>
                        <input type="text" class="form-control" wire:model="year_id">
                    </div>
                    <div class="mb-3" hidden>
                        <label class="form-label">Semester ID</label>
                        <input type="text" class="form-control" wire:model="semester_id">
                    </div>
                    <div style="display: flex; margin-bottom: 20px;">
                        <div class="mb-3">
                            <label class="form-label">Course Description</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3" style="margin-left: 5%;">
                            <label for="exampleInputPassword1" class="form-label">Code</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div style="display: flex; margin-bottom: 20px;">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Unit</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3" style="margin-left: 5%;">
                            <label for="exampleInputPassword1" class="form-label">Day</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div style="display: flex; margin-bottom: 20px;">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Time</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3" style="margin-left: 5%;">
                            <label for="exampleInputPassword1" class="form-label">Room</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div style="display: flex; margin-bottom: 20px;">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Modality</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3" style="margin-left: 5%;">
                            <label for="exampleInputPassword1" class="form-label">Teacher</label>
                            <input type="text" class="form-control">
                        </div>
                    </div

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Tuition Fee</label>
                        <input type="text" class="form-control" style="width: 48%;">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
