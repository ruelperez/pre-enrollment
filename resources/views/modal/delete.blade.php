<div wire:ignore.self class="modal" tabindex="-1" id="delete{{$frm_data->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if(session()->has('dataAdded'))
                    <div class="alert alert-success" style="width: 100%; text-align: center; ">
                        {{ session('dataAdded') }}
                    </div>
                @elseif(session()->has('dataError'))
                    <div class="alert alert-danger" style="width: 60%; ">
                        {{ session('dataError') }}
                    </div>
                @endif
                Are you sure you want to delete?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="del({{$frm_data->id}})" data-bs-dismiss="modal">Proceed</button>
            </div>
        </div>
    </div>
</div>
