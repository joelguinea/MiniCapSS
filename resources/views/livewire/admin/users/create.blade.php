<div>
        <div class="card border border-light" style="background-color:#292929;">
            <div class="card-header" style="background-color:#ffa31a;">
                <h3 class="text-center mt-2">Add User</h3>
            </div>
            <div class="card-body shadow">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="name">
                    <label for="name">Name</label>
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="text" class="form-control" wire:model.defer="email">
                    <label for="email">Email</label>
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="recipient-name" wire:model.defer="password" required="">
                        <label for="password">Password</label>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>
                <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="recipient-name" wire:model.defer="password_confirmation" required="">
                        <label for="password_confirmation">Confirm Password</label>
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                </div>

                <div class="form-floating mb-3">
                    <select name="gender" class="form-select" wire:model.defer="gender">
                        <option disabled>Gender</option>
                        <option selected hidden="true">Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <label for="gender">Gender</label>
                    @error('gender')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-floating mb-2 d-grip gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-warning" wire:click="addUser()">
                        Add User
                    </button>
                    <button class="btn btn-warning mx-2" wire:click="back()">
                        Back
                    </button>
                </div>
            </div>
        </div>
</div>

<style>
 body{
    background-image: url("images/stud.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
}
</style>