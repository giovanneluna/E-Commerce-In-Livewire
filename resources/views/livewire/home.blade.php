<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @livewireStyles
</head>

<body>
    <div>
        <center>
            <h1>Gika E-Electronics</h1>
        </center>
        <br>
    </div>
    <div class="container">
        <div class="card" style="width: 18rem;">
            <img src="app/Http/Livewire/mibr.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Computador Gamer SkyMancer</h5>
                <p class="card-text">Uma Maquina Capaz de Rodar Todos os Jogos a 60 Fps tudo no Alto</p>
                <a href="computador/produto/skymancer" class="btn btn-primary">Visualizar</a>
            </div>
        </div>
    </div>

    @livewire('image-upload')
    @livewireScripts
</body>

</html>
