<center>
    <form wire:submit.prevent="register">
        <div class="row g-3">
            <div class="col-md-4">
                <label>Nome do Jogo</label>
                <input class="form-control" wire:model="game.name" placeholder="Ex:League of Legends" type="text"
                    id="name">
                @error('name')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div class="col-md-4">
                <label>Plataforma</label>
                <select class="form-control" wire:model="game.platform" name="platform" id="platform">
                    <option selected></option>
                    <option value="pc">PC</option>
                    <option value="ps4">PS4</option>
                    <option value="ps5">PS5</option>
                    <option value="xbox">Xbox</option>
                    <option value="nintendos">NintendoSwitch</option>
                </select>
            </div>
            <br>
            <div class="col-md-4">
                <label>Tipo de Midia</label>
                <select class="form-control" wire:model="game.typeDisk" name="typeDisk" id="typeDisk">
                    <option selected></option>
                    <option value="digital">Digital</option>
                    <option value="physical">Fisica</option>
                </select>
            </div>
            <br>
            <div class="col-md-4">
                <label>Data de Lançamento</label>
                <input class="form-control" wire:model="game.launched" type="date" name="launched" id="launched">
                @error('launched')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-4">
                <label>Preço</label>
                <input class="form-control" wire:model="game.price" type="text" name="price" placeholder="R$ 70,00"
                    id="price">
                @error('price')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-4">
                <label>Quantidade em Estoque</label>
                <input class="form-control" wire:model="game.inStock" type="text" name="inStock" id="inStock">
                @error('inStock')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="col-md-4">
                <label>Descrição</label>
                <input class="form-control" wire:model="game.description" type="text" name="description"
                    id="description">
                @error('description')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <br>
            <div class="col-md-4">
                <input type="submit" value="Register">
            </div>
        </div>
    </form>
</center>