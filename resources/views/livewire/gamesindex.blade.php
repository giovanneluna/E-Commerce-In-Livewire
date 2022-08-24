<div class="container">
    <center>
        <h1>Jogos</h1>
    </center>
    <a href="/games/criar"><button class="btn btn-outline-success">Registrar</button></a>
    <table class=" table table-bordered text-dark text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome do Jogo</th>
                <th scope="col">Data de Lançamento</th>
                <th scope="col">Preço do Jogo</th>
                <th scope="col">Estoque do Jogo</th>
                <th scope="col">Plataforma do Jogo</th>
                <th scope="col">Tipo de Midia</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>

            </tr>
        </thead>
        @foreach ($games as $game)
            <tbody class="table-group-divider text-center">
                <tr>
                    <td scope="row">{{ $game->id }}</td>
                    <td scope="row">{{ $game->name }}</td>
                    <td scope="row">{{ $game->launched }} </td>
                    <td scope="row">{{ $game->price }}</td>
                    <td scope="row">{{ $game->inStock }}</td>
                    <td scope="row">{{ $game->platform }}</td>
                    <td scope="row">{{ $game->typeDisk }}</td>
                    <td scope="row"><a href="/games/edit/{{ $game->id }}"><button
                                class="btn btn-success">Editar</button></a></td>
                    <td scope="row"><button class="btn btn-danger"
                            wire:click="delete({{ $game->id }})">Deletar</button></td>
                </tr>
            </tbody>
        @endforeach
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
