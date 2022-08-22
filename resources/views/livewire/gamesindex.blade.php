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
                <td scope="col"><a href="/games/edit/{id}"><button>Editar</button></a></td>
            </tr>
        </tbody>
    @endforeach
