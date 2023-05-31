<div>
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

    <div class="spinner-border" style="width: 3rem; height: 3rem;margin-left: 47%; margin-top: 70px;" role="status" wire:loading wire:target="loadData">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="divform" wire:loading.remove>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Last School Attended</th>
                <th>Year Level</th>
                <th>Course</th>
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
                        <tr>
                            <td>{{$frm_data->first_name}}</td>
                            <td>{{$frm_data->last_name}}</td>
                            <td>{{$frm_data->last_school}}</td>
                            <td>{{$course_id}}</td>
                            <td>{{$year_id}}</td>
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
