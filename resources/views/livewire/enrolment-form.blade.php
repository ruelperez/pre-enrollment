<div class="enrolmentDiv">
    @if($da == 1)
        <button type="button" class="btn btn-danger clear" wire:click="del">Clear Data</button>
    @endif
    <form wire:submit.prevent="submit_enrol" class="form1">
        <div class="div1">
            <div class="mb-3">
                <label class="form-label">Student No.</label>
                <input type="text" class="form-control" wire:model="student_number">
                @error('student_number')
                <p class="text-red-500 text-xs p-1" style="color: red">{{$message}}</p>
                @enderror
            </div>
            <div class="mb-3 div2">
                <label class="form-label">Student Class:</label>
                <div class="div3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="old"  wire:model="student_class_old" @if($student_class == "old") checked @endif>
                        <label class="form-check-label" for="flexCheckIndeterminate">
                            Old
                        </label>
                    </div>
                    @error('student_class_old')
                    <p class="text-red-500 text-xs p-1">{{$message}}</p>
                    @enderror
                    <div class="form-check div4">
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
            <div class="select1">
                <label class="form-label">Semester</label>
                <select class="form-select" aria-label="Default select example"  wire:model="semester">
                    <option selected value="{{$semester}}">{{$semester}}</option>
                </select>
            </div>
            <div class="div5">
                <label class="form-label year">School Year</label>
                <div class="div6">
                    <input type="text" class="form-control" wire:model="school_year_start"  required> <b>-</b>
                    <input type="text" class="form-control" wire:model="school_year_end" required>
                </div>
                @error('school_year1')
                <p class="text-red-500 text-xs p-1">{{$message}}</p>
                @enderror
                @error('school_year2')
                <p class="text-red-500 text-xs p-1">{{$message}}</p>
                @enderror

            </div>
        </div>
        <div class="div7">
            <div class="mb-3 fname">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control" wire:model="fname">
            </div>
            <div class="mb-3 div8">
                <label for="exampleInputPassword1" class="form-label">Last Name</label>
                <input type="text" class="form-control" wire:model="lname">
            </div>
            <div class="mb-3 div9">
                <label for="exampleInputPassword1" class="form-label">Middle Name</label>
                <input type="text" class="form-control" wire:model="mname" required>
            </div>
        </div>
        <div class="div10">
            <div class="mb-3 address">
                <label for="exampleInputPassword1" class="form-label">Address</label>
                <input type="text" class="form-control" wire:model="address" required>
            </div>
            <div class="mb-3 div11">
                <label for="exampleInputPassword1" class="form-label">Guardian</label>
                <input type="text" class="form-control" wire:model="guardian" required>
            </div>
            <div class="mb-3 div12">
                <label for="exampleInputPassword1" class="form-label">Contact No.</label>
                <input type="text" class="form-control" wire:model="contact" required>
            </div>
        </div>
        <div class="div13">
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Birth Date</label>
                <input type="text" class="form-control" wire:model="birthdate" required>
            </div>
            <div class="mb-3 div14" >
                <label for="exampleInputPassword1" class="form-label">Birth Place</label>
                <input type="text" class="form-control" wire:model="birthplace" required>
            </div>
            <div class="div15">
                <label class="form-label">Sex</label>
                <select class="form-select select11" aria-label="Default select example" wire:model="sex" required>
                    <option selected>Sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="mb-3 div16">
                <label for="exampleInputPassword1" class="form-label">Course</label>
                <input type="text" class="form-control" wire:model="course">
            </div>
        </div>
        <div class="div17">
            <label class="form-label">Year Level</label>
            <input type="text" class="form-control" wire:model="yearlevel">
        </div>
        @if($rg == 0)
            <div class="div18">
                <button type="submit" class="btn btn-primary">Validate</button>
            </div>
        @elseif($rg == 1)
            <div class="div19">
                <button type="button" class="btn btn-success" onclick="window.location='{{ route('form.pdf',['user' => $user_id, 'year' => $year_id, 'course' => $course_id, 'sem' => $semester_id])}}'">Preview Form</button>
            </div>
        @endif

    </form>
</div>
