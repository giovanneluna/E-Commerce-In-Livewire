<form wire:submit.prevent="register">
    <div class="row g-3">
        <div class="col-md-4">
            <label>Nome do Computador</label>
            <input class="form-control" wire:model="name" type="text" id="name">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div class="col-md-4">
            <label>Placa de Video</label>
            <input type="text" class="form-control" wire:model="videocard" id="videocard">
            @error('videocard')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label>Processador</label>
            <input type="text" class="form-control" wire:model="processor" id="processor">
            @error('processor')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label>Memoria Ram</label>
            <input type="text" class="form-control" wire:model="memory" id="memory">
            @error('memory')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label>Armazenamento</label>
            <input type="text" class="form-control" wire:model="storage" id="storage">
            @error('storage')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-4">
            <label>Preço</label>
            <input type="text" class="form-control" wire:model="price" id="price">
            @error('price')
                <span class="text-danger"> {{ $message }}</span>
            @enderror
        </div>


        <div class="col-md-4">
            <input type="submit" value="Register" class="btn btn-outline-success">
        </div>

    </div>
</form>
