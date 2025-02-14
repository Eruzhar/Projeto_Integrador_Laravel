<x-layout-dashboard title="Orçamentos Pendentes"  css="resources/css/Orcamento.css">

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orçamentos Pendentes</title>
    @vite(['resources/css/Orcamento.css'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/NavBAR-FooterBAR.css">
</head>
<body>
    <x-header></x-header>
    <div class="c">
        <div class="sidebar">
            <a href='{{ route( 'menu') }}'>
            <button type="button" class="btn btn-primary"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            data-bs-custom-class="custom-tooltip"
            data-bs-title="Voltar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
            </svg></button></a>
        <ul>
            <li>
            <a href='{{ route( 'orcamentosNovos') }}'>Novos</a>
            </li>
            <li>
            <a href='{{ route( 'orcamentosPendentes') }}'>Pendentes</a>
            </li>
            <li>
            <a href='{{ route( 'orcamentosConcluidos') }}'>Concluidos</a>
            </li>
        </ul>
        </div>
        <div class="conteudo">
        <h1>Orçamentos Pendentes</h1>  
        <div class="form-outline" data-mdb-input-init>
            <input type="search" id="form1" class="form-control" placeholder="Buscar" aria-label="Search" />
        </div>
        <br/>
        <section class="Lista">
            <table class="table">
            </table>  
        </section>
    </div>
</div>
</x-layout-dashboard>