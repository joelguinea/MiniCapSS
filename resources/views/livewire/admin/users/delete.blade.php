<div>

    <div class="card shadow border border-light w-100 mt-5 mx-auto" style="background-color:#292929;">
        <div class="card-header" style="background-color:#ffa31a;">
            <h5 class="text-white text-center mt-2" >Delete User?</h5>
        </div>
        <div class="card-body">
            <h6 class="text-center text-white">Are you sure you want to delete this User?</h6>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-center">
                <button class="btn btn-warning" wire:click="delete()">
                    Yes
                </button>
                <button class="btn btn-warning mx-2" wire:click="back()">
                    No
                </button>
            </div>
        </div>
    </div>

</div>

