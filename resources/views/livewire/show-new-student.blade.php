<div>
    <input type="text" placeholder="Search School" wire:model.debounce.10ms="searchInput" style="width: 30%; margin-left: 35%; padding: 0.3%;">
    <i class="fas fa-search" style="color: black; margin-top: 1%; margin-left: 1%; cursor: pointer;" wire:click="loadData" wire:loading.attr="disabled" ></i>

    @if($ng == 1)
        <div class="list-group list-group-flush suggest" style="width: 30%; margin-left: 35%;">
            @foreach($resultss as $result)
                <button type="button" class="list-group-item list-group-item-action" wire:click="click_suggest({{$result->id}})">{{$result->last_school}}</button>
            @endforeach
        </div>
    @endif


    <div class="spinner-border" style="width: 3rem; height: 3rem;margin-left: 47%; margin-top: 70px;" role="status" wire:loading wire:target="loadData">
        <span class="visually-hidden">Loading...</span>
    </div>
    @if($bs == 1)
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
    @endif
</div>
