
<div class="sub-info"> @include('modal.add_subject')
    <form wire:submit.prevent="submit">
        <div class="adiv" style="padding-right: 7%;">
            <div class="select1">
                <select class="form-select" aria-label="Default select example" style="text-align: center" wire:model.defer="year_id">
                    <option selected>Year Level</option>
                    @foreach($year_data as $year_datas)
                        <option value={{$year_datas->id}}>{{$year_datas->level}}</option>
                    @endforeach
                </select>
            </div>
            <div class="select2">
                <select class="form-select" aria-label="Default select example" style="text-align: center" wire:model.defer="course_id">
                    <option selected>Course</option>
                    @foreach($course_data as $crs_data)
                        <option value={{$crs_data->id}}>{{$crs_data->name}}</option>
                    @endforeach

                </select>
            </div>

            <div class="select3">
                <select class="form-select" aria-label="Default select example" style="text-align: center" wire:model.defer="semester_id">
                    <option selected>Semester</option>
                    @foreach($semister_data as $sem_data)
                        <option value={{$sem_data->id}}>{{$sem_data->sem}}</option>
                    @endforeach

                </select>
            </div>

            <div>
                <button type="submit" class="btn btn-primary btnFind" wire:click="loadData" wire:loading.attr="disabled">Find</button>
            </div>
        </div>

    </form>
    <div class="divbtn">
        <button type="button" class="btn btn-primary btnAdd" data-bs-toggle="modal" data-bs-target="#addSub" >Add</button>
        <button type="button" class="btn btn-warning btnReset" wire:click="load" wire:loading.attr="disabled">Reset Subject</button>
    </div>

    @if(session()->has('deleted'))
        <div class="alert alert-success delete" >
            {{ session('deleted') }}
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger deleteError">
            {{ session('error') }}
        </div>
    @endif
    <div class="spinner-border spin" wire:loading wire:target="loadData">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-border spin2"  wire:loading wire:target="load">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="divform" wire:loading.remove>
        <table class="table table-hover tbl1">
            <thead>
            <tr>
                <th>Code</th>
                <th>Course Description</th>
                <th>Unit</th>
                <th>Day</th>
                <th>Time</th>
                <th>Room</th>
                <th>Modality</th>
                <th>Teacher</th>
                <th>Tuition fee</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            @if($base == 1)
                @if($form_data === "No Data Posted")
                    <tr>
                        <td colspan="9">NO DATA POSTED</td>
                    </tr>
                @else
                    @php $total_tuition = 0; $total_unit = 0; @endphp
                    @if(isset($form_data))
                        @foreach($form_data as $frm_data)
{{--                            @include('modal.client_delete')--}}
                            <tr>
                                <td>{{$frm_data->subject_code}}</td>
                                <td>{{$frm_data->name}}</td>
                                <td>{{$frm_data->unit}}</td>
                                <td>{{$frm_data->day}}</td>
                                <td>{{$frm_data->time}}</td>
                                <td>{{$frm_data->room}}</td>
                                <td>{{$frm_data->modality}}</td>
                                <td>{{$frm_data->teacher}}</td>
                                <td><p style="display: none;">{{$frm_data->tuition}}</p></td>
                                <td class="tdDelete">
                                    <img class="delIcon" src="{{url('/image/delete.png')}}" wire:click="remove({{$frm_data->id}})"  width="27" height="27">
                                </td>
                            </tr>
                            @php $total_tuition += $frm_data->tuition; $total_unit += $frm_data->unit; @endphp

                        @endforeach
                    @endif
                        <tr>
                            <td></td>
                            <td></td>
                            <td><div class="number-box">
                                    <span class="number">{{$total_unit}}</span>
                                </div></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><div class="number-box">
                                    <span class="number" style="display: none;">{{$total_tuition}}</span>
                                </div></td>
                        </tr>
                @endif
            @else
                <tr>
                    <td class="selectAbove" colspan="9">Select Option List Above</td>
                </tr>
            @endif

            </tbody>
        </table>
    </div>
    <a class="enrolBtn" href="{{url('/student/enrolment-form', ['courseID' => $course_id, 'semesterID' => $semester_id, 'yearlevel' => $year_id])}}" target="_blank" >Fill out Enrolment form</a>
</div>
