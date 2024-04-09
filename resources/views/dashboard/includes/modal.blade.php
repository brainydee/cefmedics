<!-- Modal -->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Upload File</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Upload Test File</label>
                <input type="file" wire:model = "file" class="form-control" id="exampleFormControlInput1" placeholder="">
              
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <div wire:loading wire:target="submitItem">
                <img src="{{asset('assets/imgs/loader.gif')}}"/>
            </div>
            <div  wire:loading.remove>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i>&nbsp;Close</button>
                <button type="button" wire:click = "" class="btn btn-primary"><i class="fa fa-check"></i>Submit</button>
            </div>
      </div>
    </div>
  </div>
</div>