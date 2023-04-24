<div>@include('modal.subject_reg')
{{--    <div style="display: flex;">--}}
{{--        <div style="width: 20%; margin-left: 21%;">@error('year') <span style="color: red;>{{ $message }}</span> @enderror</div>--}}
{{--        <div style="width: 20%;">@error('semister') <span style="color: red;">{{ $message }}</span> @enderror</div>--}}
{{--        <div style="width: 20%;">@error('semister') <span style="color: red;">{{ $message }}</span> @enderror</div>--}}
{{--    </div>--}}

    <form wire:submit.prevent="submit">
        <div class="adiv">
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

            <div class="button">
                <button type="submit" class="btn btn-primary" wire:click="loadData" wire:loading.attr="disabled">Find</button>
            </div>
        </div>

    </form>

    <div class="button" style="margin-left: 5%;margin-top: 30px;">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#sub_reg" style="width: 10%; margin-left: 1px;">Add</button>
    </div>
    @if(session()->has('deleted'))
        <div class="alert alert-success" style="width: 70%; margin-left: 15%; text-align: center; ">
            {{ session('deleted') }}
        </div>
    @elseif(session()->has('error'))
        <div class="alert alert-danger" style="width: 60%; ">
            {{ session('error') }}
        </div>
    @endif
    <div class="spinner-border" style="width: 3rem; height: 3rem;margin-left: 47%; margin-top: 70px;" role="status" wire:loading wire:target="loadData">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="divform" wire:loading.remove>
        <table class="table table-hover">
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
                        @foreach($form_data as $frm_data)
                            @include('modal.edit')
                            @include('modal.delete')
                            <tr>
                                <td>{{$frm_data->subject_code}}</td>
                                <td>{{$frm_data->name}}</td>
                                <td>{{$frm_data->unit}}</td>
                                <td>{{$frm_data->day}}</td>
                                <td>{{$frm_data->time}}</td>
                                <td>{{$frm_data->room}}</td>
                                <td>{{$frm_data->modality}}</td>
                                <td>{{$frm_data->teacher}}</td>
                                <td>{{$frm_data->tuition}}</td>
                                <td style="padding-left: 1px;"><img src="{{url('/image/edit.png')}}" width="18" height="18" wire:click="edit({{$frm_data->id}})" data-bs-toggle="modal" data-bs-target="#sub_edit{{$frm_data->id}}" style="cursor: pointer; margin-left: 1px;">
                                    <img src="{{url('/image/delete.png')}}" data-bs-toggle="modal" data-bs-target="#delete{{$frm_data->id}}"  width="20" height="20" style="cursor: pointer; margin-left: 15px;"></td>
                            </tr>
                        @endforeach
                    @endif
                @else
                    <tr>
                        <td colspan="9">Select Option List Above</td>
                    </tr>
                @endif

            </tbody>
        </table>
    </div>
</div>
