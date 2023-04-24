<div wire:ignore.self class="modal" tabindex="-1" id="dlt{{$frm_data->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click="remove({{$frm_data->id}})" data-bs-dismiss="modal">Proceed</button>
            </div>
        </div>
    </div>
</div>
