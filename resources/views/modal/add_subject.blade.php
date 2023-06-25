<div  wire:ignore.self class="modal fade addModal" id="addSub" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Subject</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if(session()->has('good'))
                <div class="alert alert-success goodAlert">
                    {{session('good')}}
                </div>
            @endif
            @if(session()->has('bad'))
                <div class="alert alert-danger badAlert">
                    {{session('bad')}}
                </div>
            @endif
            <div class="modal-body bodyModal">
                <form class="form3">
                    <input type="text" placeholder="Search" wire:model.debounce.500ms="searchInput">
                </form>
            </div>

            @if($ng == 1)
                <div class="list-group list-group-flush suggest">
                    @foreach($resultss as $result)
                        <button type="button" class="list-group-item list-group-item-action" wire:click="click_suggest({{$result->id}})">{{$result->name}}</button>
                    @endforeach
                </div>
            @endif


            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary addSuggest" wire:click="subjectADD">Add</button>
            </div>
        </div>
    </div>
</div>
