<div>
{{--    <button wire:click="transfer">transfer</button>--}}

    <input type="text" placeholder="Search School" wire:model.debounce.1ms="searchInput" style="width: 30%; margin-left: 35%; padding: 0.3%;">

    @if($ng == 1)
{{--            @foreach($resultss as $result)--}}
                <div class="divform">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Last School Attended</th>
                        </tr>
                        </thead>

                        <tbody>
                            @if($form_data === "No Data Posted")
                                <tr>
                                    <td colspan="9">NO DATA POSTED</td>
                                </tr>
                            @else
                                @foreach($resultss as $result)
                                    @if($result->class == "new")
                                    <tr>
                                        <td>{{$result->first_name}}</td>
                                        <td>{{$result->middle_name}}</td>
                                        <td>{{$result->last_name}}</td>
                                        <td>{{$result->last_school}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endif


                        </tbody>
                    </table>
                </div>
{{--                <button type="button" class="list-group-item list-group-item-action" wire:click="loadData({{$result->id}})" wire:loading.attr="disabled"><i class="fas fa-search" style="color: black; margin-top: 1%; margin-left: 1%; margin-right: 8%; cursor: pointer;" wire:click="loadData" wire:loading.attr="disabled" ></i> {{$result->last_name}}</button>--}}
{{--            @endforeach--}}

    @endif


    <div class="spinner-border" style="width: 3rem; height: 3rem;margin-left: 47%; margin-top: 70px;" role="status" wire:loading wire:target="loadData">
        <span class="visually-hidden">Loading...</span>
    </div>

    @if($searchInput == "")
    <div class="divform">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Last School Attended</th>
            </tr>
            </thead>

            <tbody>

                @foreach($userDATA as $frm_data)
                    @if($frm_data->class == "new")
                    <tr>
                        <td>{{$frm_data->first_name}}</td>
                        <td>{{$frm_data->middle_name}}</td>
                        <td>{{$frm_data->last_name}}</td>
                        <td>{{$frm_data->last_school}}</td>
                    </tr>
                    @endif
                @endforeach

             </tbody>
        </table>
    </div>
    @endif
</div>
