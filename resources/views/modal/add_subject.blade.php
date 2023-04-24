<div  wire:ignore.self class="modal fade" id="addSub" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" >
        <div class="modal-content" >
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="width: 100%;">
                <form wire:submit.prevent="addSubject_submit" style="width: 90%;">
                    <div class="adivs">
                        <div class="select1">
                            <select required class="form-select" aria-label="Default select example" style="background-color: #E6E6FA; margin-bottom: 8px; text-align: center" wire:model.defer="level_id">
                                <option selected>Year Level</option>
                                @foreach($yearDATA as $ydata)
                                    <option value={{$ydata->id}}>{{$ydata->level}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="select2">
                            <select required class="form-select" aria-label="Default select example" style="background-color: #E6E6FA;margin-bottom: 8px; text-align: center" wire:model.defer="kurso_id">
                                <option selected>Course</option>
                                @foreach($courseDATA as $crs)
                                    <option value={{$crs->id}}>{{$crs->name}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="select3">
                            <select required class="form-select" aria-label="Default select example" style="background-color: #E6E6FA;margin-bottom: 8px; text-align: center" wire:model.defer="sem_id">
                                <option selected>Semester</option>
                                @foreach($semesterDATA as $semD)
                                    <option value={{$semD->id}}>{{$semD->sem}}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="button">
                            <button type="submit" class="btn btn-primary" wire:click="load" wire:loading.attr="disabled" style="background-color: darkblue; width: 40%;margin-left: 30%;">Find</button>
                        </div>
                    </div>

                </form>
            </div>

            <div class="spinner-border" style="width: 3rem; height: 3rem;margin-left: 47%; margin-top: 70px;" role="status" wire:loading wire:target="load">
                <span class="visually-hidden">Loading...</span>
            </div>

            <div style="margin-top: 20px;" wire:loading.remove>
                <select class="form-select" aria-label="Default select example" style="background-color: #E6E6FA;margin-bottom: 8px; text-align: center; width: 78%;margin-left: 10%;" wire:model.defer="subject_id">
                    <option selected>Select Subject</option>
                    @if($modal_data != null)
                        @foreach($modal_data as $mod)
                            <option value={{$mod->id}}>{{$mod->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" style="width: 30%;" wire:click="adSub">Add</button>
            </div>
        </div>
    </div>
</div>
