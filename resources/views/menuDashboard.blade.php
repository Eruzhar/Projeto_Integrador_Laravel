<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Menu</title>
    @vite(['resources/css/Dashboard-Menu.css']);
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    
</head>
<body>
    <x-header></x-header>
    <div class="Menu">
        <h1>Dashboard Loja</h1>
        <section>
            <div>
                <a href='Dahsboard-Galeria.html'><button type="button" class="btn btn-primary">Galeria</button></a>
                <a href='Dahsboard-Cardapio.html'><button type="button" class="btn btn-primary">Cardapio</button></a>
            </div>
            <div>
                <a href='Dahsboard-Ambiente.html'><button type="button" class="btn btn-primary">Ambiente</button></a>
                <a href='Orcamento-Concluidos.html'><button type="button" class="btn btn-primary">Orçamentos</button></a>
            </div>
            <div>
                <a href='Curriculos.html'><button id="ultimo" type="button" class="btn btn-primary">Curriculos</button></a>
            </div>
        </section>
    </div>
</body>
</html>