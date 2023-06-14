<div>
    @include('modal.add-student')
    <button type="button" class="btn btn-success" wire:click="but" style="margin-left: 83%;">Import USN data</button>
    <div style="display: flex; margin-top: 1%;">
        <div style="margin-left: 5%;">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_student">Add Student</button>
        </div>
        <div style="margin-left: 59%;">
            <input type="text" placeholder="Search" wire:model.debounce.1ms="searchInput" style="width: 150%; padding: 1%;">
        </div>

    </div>


    @if($ng == 1)
        {{--            @foreach($resultss as $result)--}}
        <div class="divform">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Last Name</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Birthday</th>
                    <th>Status</th>
                    <th>Sex</th>
                    <th>USN</th>
                </tr>
                </thead>

                <tbody>
                @if($form_data === "No Data Posted")
                    <tr>
                        <td colspan="9">NO DATA POSTED</td>
                    </tr>
                @else
                    @foreach($resultss as $result)
                        @include('modal.edit-student')
                        <tr>
                            <td>{{$result->first_name}}</td>
                            <td>{{$result->middle_name}}</td>
                            <td>{{$result->last_name}}</td>
                            <td>{{$result->address}}</td>
                            <td>{{$result->age}}</td>
                            <td>{{$result->birthday}}</td>
                            <td>{{$result->status}}</td>
                            <td>{{$result->sex}}</td>
                            <td>{{$result->usn}}</td>
                            <td><i class="far fa-edit" style="color: blue" data-bs-toggle="modal" data-bs-target="#edit{{$result->id}}" wire:click="edit({{$result->id}})"></i></td>
                            <td><i class="fas fa-trash-alt" style="color: red" onclick="del({{$result->id}})"></i></td>
                        </tr>
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
                    <th>Address</th>
                    <th>Age</th>
                    <th>Birthday</th>
                    <th>Status</th>
                    <th>Sex</th>
                    <th>USN</th>
                </tr>
                </thead>

                <tbody>

                @foreach($userDATA as $frm_data)
                    @include('modal.edits-student')
                    <tr>
                        <td>{{$frm_data->first_name}}</td>
                        <td>{{$frm_data->middle_name}}</td>
                        <td>{{$frm_data->last_name}}</td>
                        <td>{{$frm_data->address}}</td>
                        <td>{{$frm_data->age}}</td>
                        <td>{{$frm_data->birthday}}</td>
                        <td>{{$frm_data->status}}</td>
                        <td>{{$frm_data->sex}}</td>
                        <td>{{$frm_data->usn}}</td>
                        <td><i class="far fa-edit" style="color: blue" data-bs-toggle="modal" data-bs-target="#edit{{$frm_data->id}}" wire:click="edit({{$frm_data->id}})"></i></td>
                        <td><i class="fas fa-trash-alt" style="color: red" onclick="del({{$frm_data->id}})"></i></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    @endif
</div>

<script>
    function del(id) {
        if (confirm("Are you sure to delete this record???"))
            window.livewire.emit('delete', id);
    }
</script>
