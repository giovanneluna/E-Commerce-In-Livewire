<div class="container">
    <center>
        <form wire:submit.prevent="register">
            <div>
                @if (session()->has('message'))
                    <div class="p-3 bg-green-300 text-green-700">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <label>Nome do Computador</label>
                    <input class="form-control" wire:model="computer.name" type="text" id="name">
                    @error('computer.name')
                        <span
                            class="text-light border-2 py-1 px-1 rounded border-red-700 bg-red-200 bg-danger">{{ $message }}</span>
                    @enderror
                </div>
                <br>
                <div class="col-md-4">
                    <label>Placa de Video</label>
                    <input type="text" class="form-control" wire:model="computer.videocard" id="videocard">
                    @error('computer.videocard')
                        <span
                            class="text-light border-2 py-1 px-1 rounded border-red-700 bg-red-200 bg-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label>Processador</label>
                    <input type="text" class="form-control" wire:model="computer.processor" id="processor">
                    @error('computer.processor')
                        <span class="text-light border-2 py-1 px-1 rounded border-red-700 bg-red-200 bg-danger">
                            {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label>Memoria Ram</label>
                    <input type="text" class="form-control" wire:model="computer.memory" id="memory">
                    @error('computer.memory')
                        <span class="text-light border-2 py-1 px-1 rounded border-red-700 bg-red-200 bg-danger">
                            {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label>Armazenamento</label>
                    <input type="text" class="form-control" wire:model="computer.storage" id="storage">
                    @error('computer.storage')
                        <span class="text-light border-2 py-1 px-1 rounded border-red-700 bg-red-200 bg-danger">
                            {{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-4">
                    <label>Preço</label>
                    <input type="text" class="form-control" wire:model="computer.price" id="price">
                    @error('computer.price')
                        <span class="text-light border-2 py-1 px-1 rounded border-red-700 bg-red-200 bg-danger">
                            {{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <input type="submit" value="Register" class="btn btn-outline-success">
                </div>
            </div>
    </center>
    </form>
</div>
