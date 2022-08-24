<div class="container">

    <center>
        <h1>Computadores</h1>
    </center>

    <a href="/computador/criar"><button class="btn btn-outline-success">Registrar</button></a>
    <table class=" table table-bordered text-dark text-center">
        <thead class="table-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome do Computador</th>
                <th scope="col">Placa de Video</th>
                <th scope="col">Processador</th>
                <th scope="col">Memoria Ram</th>
                <th scope="col">Sistema de Armazenamento</th>
                <th scope="col">Preço</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        @foreach ($computers as $computer)
            <tbody class="table-group-divider text-center">
                <tr>
                    <td scope="row">{{ $computer->id }}</td>
                    <td scope="row">{{ $computer->name }}</td>
                    <td scope="row">{{ $computer->videocard }} </td>
                    <td scope="row">{{ $computer->processor }}</td>
                    <td scope="row">{{ $computer->memory }}</td>
                    <td scope="row">{{ $computer->storage }}</td>
                    <td scope="row">{{ $computer->price }}</td>
                    <td scope="col"><a href="/computador/edit/{{ $computer->id }}"><button
                                class="btn btn-success">Editar</button></a></td>
                    <td scope="col"><button class="btn btn-danger"
                            wire:click="delete({{ $computer->id }})">Deletar</button></td </tr>
            </tbody>
        @endforeach
</div>
