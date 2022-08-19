<form wire:submit.prevent="update">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label class="col-form-label">Nome do Jogo</label>
            <input class="form-control" wire:model="game.name" placeholder="Ex:League of Legends" type="text"
                id="name">
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <br>
        <div class="col-auto">
            <label class="col-form-label">Plataforma</label>
            <select class="form-control" wire:model="game.platform" name="platform" id="game.platform">
                <option value="" selected disabled></option>
                <option value="pc">PC</option>
                <option value="ps4">PS4</option>
                <option value="ps5">PS5</option>
                <option value="xbx">Xbox</option>
                <option value="nintendos">NintendoSwitch</option>
            </select>
        </div>
        <div class="col-auto">
            <label class="col-form-label">Tipo de Midia</label>
            <select class="form-control" wire:model="game.typeDisk" name="typeDisk" id="typeDisk">
                <option value="" selected disabled></option>
                <option value="digital">Digital</option>
                <option value="physical">Fisica</option>
            </select>
        </div>
        <div class="col-auto">
            <label class="col-form-label">Data de Lançamento</label>
            <input class="form-control" wire:model="game.launched" type="date" name="launched" id="launched">
            @error('launched')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="col-auto">
            <label class="col-form-label">Preço</label>
            <input class="form-control" wire:model="game.price" type="text" name="price" placeholder="R$ 70,00"
                id="price">
            @error('price')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="col-auto">
            <label class="col-form-label">Quantidade em Estoque</label>
            <input class="form-control" wire:model="game.inStock" type="text" name="inStock" id="inStock">
            @error('inStock')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="col-auto">
            <label class="col-form-label">Descrição</label>
            <input class="form-control" wire:model="game.description" type="text" name="description"
                id="description">
            @error('description')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div class="col-auto">
            <input type="submit" value="Editar" class="btn btn-outline-success">
        </div>
    </div>
</form>
