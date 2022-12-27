<div>

    <div class="card shadow border border-light w-50 mt-5 mx-auto" style="background-color: rgb(41,41,41)">
        <div class="card-header">
            <h5 class="text-warning text-center mt-2">Delete Post?</h5>
        </div>
        <div class="card-body">
            <h6 class="text-center text-warning">Are you sure you want to delete this post?</h6>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn btn-success" wire:click="delete()">
                    Yes
                </button>
                <button class="btn btn-danger mx-2" wire:click="back2()">
                    No
                </button>
            </div>
        </div>
    </div>

</div>

