<div>
    @if($da == 1)
        <button type="button" class="btn btn-danger" wire:click="del" style="margin-left: 78%;margin-top: 100px;">Clear Data</button>
    @endif
    <form wire:submit.prevent="submit_enrol" style="width: 70%; background-color: #C0C0C0; margin-left: 15%; padding-top: 5%; margin-top: 5px;">
        <div style="display: flex; margin-left: 15%;">
            <div class="mb-3">
                <label class="form-label">Student No.</label>
                <input type="text" class="form-control" wire:model="student_number">
                @error('student_number')
                <p class="text-red-500 text-xs p-1" style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3" style="margin-left: 11%;">
                <label class="form-label">Student Class:</label>
                <div style="display: flex;">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="old"  wire:model="student_class_old" @if($student_class == "old") checked @endif>
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            Old
                        </label>
                    </div>
                    @error('student_class_old')
                    <p class="text-red-500 text-xs p-1">{{$message}}</p>
                    @enderror
                    <div class="form-check" style="margin-left: 30%;">
                        <input class="form-check-input" type="checkbox" value="new" id="flexCheckIndeterminate" wire:model="student_class_new" @if($student_class == "new") checked @endif>
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            New
                        </label>
                        @error('student_class_new')
                        <p class="text-red-500 text-xs p-1">{{$message}}</p>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="select1" style="margin-left: 9%;">
                <label class="form-label">Semester</label>
                <select class="form-select" aria-label="Default select example"  wire:model="semester">
                    <option selected value="{{$semester}}">{{$semester}}</option>
                </select>
            </div>
            <div style="margin-left: 6%;">
                <label class="form-label" style="margin-left: 10%;">School Year</label>
                <div style="display: flex;">
                    <input type="text" class="form-control" wire:model="school_year_start" style="width: 25%;" required>-
                    <input type="text" class="form-control" wire:model="school_year_end" style="width: 25%;" required>
                </div>
                @error('school_year1')
                <p class="text-red-500 text-xs p-1" style="color: red">{{$message}}</p>
                @enderror
                @error('school_year2')
                <p class="text-red-500 text-xs p-1" style="color: red">{{$message}}</p>
                @enderror

            </div>
        </div>
        <div style="display: flex;margin-left: 15%;">
            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" wire:model="fname">
            </div>
            <div class="mb-3" style="margin-left: 5%;">
                <label for="exampleInputPassword1" class="form-label">Last Name</label>
                <input type="text" class="form-control" wire:model="lname">
            </div>
            <div class="mb-3" style="margin-left: 5%;">
                <label for="exampleInputPassword1" class="form-label">Middle Name</label>
                <input type="text" class="form-control" wire:model="mname" required>
            </div>
        </div>
        <div style="display: flex;margin-left: 15%;">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input type="text" class="form-control" wire:model="address" required>
            </div>
            <div class="mb-3" style="margin-left: 5%;">
                <label for="exampleInputPassword1" class="form-label">Guardian</label>
                <input type="text" class="form-control" wire:model="guardian" required>
            </div>
            <div class="mb-3" style="margin-left: 5%;">
                <label for="exampleInputPassword1" class="form-label">Contact No.</label>
                <input type="text" class="form-control" wire:model="contact" required>
            </div>
        </div>
        <div style="display: flex; margin-bottom: 20px; margin-left: 15%;">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Birth Date</label>
                <input type="text" class="form-control" wire:model="birthdate" required>
            </div>
            <div class="mb-3" style="margin-left: 5%;">
                <label for="exampleInputPassword1" class="form-label">Birth Place</label>
                <input type="text" class="form-control" wire:model="birthplace" required>
            </div>
            <div style="margin-left: 3%;">
                <label class="form-label">Sex</label>
                <select class="form-select" aria-label="Default select example" style="text-align: center" wire:model="sex" required>
                    <option selected>Sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mb-3" style="margin-left: 3%;">
                <label for="exampleInputPassword1" class="form-label">Course</label>
                <input type="text" class="form-control" wire:model="course" style="width: 50%;">
            </div>
        </div>
        <div style="margin-left: 15%;">
            <label class="form-label">Year Level</label>
            <input type="text" class="form-control" wire:model="yearlevel" style="width: 24%;">
        </div>
        @if($rg == 0)
            <div style="margin-top: 20px;">
                <button type="submit" class="btn btn-primary" style="width: 40%; margin-left: 30%;">Validate</button>
            </div>
        @elseif($rg == 1)
            <div style="margin-top: 20px;">
                <button type="button" class="btn btn-success" onclick="window.location='{{ route('form.pdf',['user' => $user_id, 'year' => $year_id, 'course' => $course_id, 'sem' => $semester_id])}}'"  style="width: 40%; margin-left: 30%;">Preview Form</button>
            </div>
        @endif

    </form>
</div>
