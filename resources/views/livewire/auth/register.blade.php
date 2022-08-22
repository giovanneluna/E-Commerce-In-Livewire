<form wire:submit.prevent="register">

    <div class="row g-3">
        <div class="col-md-4">
            <label for="name">name</label>
            <input wire:model="name" type="text" id="name" name="name">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div class="col-md-4">
            <label for="email">email</label>
            <input wire:model="email" type="text" id="email" name="email">
            @error('email')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="password">password</label>
            <input wire:model="password" type="password" id="password" name="password">

            @error('password')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="passwordConfirmation">passwordConfirmation</label>
            <input wire:model="passwordConfirmation" type="password" id="passwordConfirmation"
                name="passwordConfirmation">
        </div>
        <div class="col-md-4">
            <input type="submit" value="Register" class="btn btn-outline-success">
        </div>
    </div>
</form>
