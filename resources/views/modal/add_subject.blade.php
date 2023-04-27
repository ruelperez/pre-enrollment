<div  wire:ignore.self class="modal fade" id="addSub" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if(session()->has('good'))
                <div class="alert alert-success" style="width: 60%; padding: 10px; margin-left: 20%; margin-top: 10px; text-align: center;">
                    {{session('good')}}
                </div>
            @endif
            @if(session()->has('bad'))
                <div class="alert alert-danger" style="width: 60%; padding: 10px; margin-left: 20%; margin-top: 10px; text-align: center;">
                    {{session('bad')}}
                </div>
            @endif
            <div class="modal-body" style="width: 100%;">
                <form style="width: 90%;">
                    <input type="text" placeholder="Search" wire:model.debounce.500ms="searchInput" style="margin-left: 20%; width: 70%">
                </form>
            </div>

            @if($ng == 1)
                <div class="list-group list-group-flush" style="width: 59%; margin-left: 20%;">
                    @foreach($resultss as $result)
                        <button type="button" class="list-group-item list-group-item-action" wire:click="click_suggest({{$result->id}})">{{$result->subject_code}}</button>
                    @endforeach
                </div>
            @endif


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" style="width: 30%;" wire:click="subjectADD">Add</button>
            </div>
        </div>
    </div>
</div>
