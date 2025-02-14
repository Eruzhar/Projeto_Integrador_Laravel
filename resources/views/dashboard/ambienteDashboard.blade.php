{{ $pageName = "Dashboard Ambiente";}}
<x-layout-dashboard title="{{ $pageName }}" css="resources/css/dashboard/Dahsboard-Galeria.css">
<x-header-dashboard></x-header-dashboard>
    <section>
        <div class="Cabeçalho">
            <a href='{{route('menu')}}'>
                <x-button-voltar descricao="Voltar">
                    </x-button-voltar>
                </a>
                <h1>{{ $pageName }}</h1>
                <a href='{{route('ambienteNovo')}}'>
                    <x-button-novo descricao="Adicionar novo">
                    </x-button-novo>
                </a>                
        </div>
    <div class="Filtro">
        <h4>Ordem:</h4>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Nome</option>
            <option>Data</option>
            <option>Tamanho</option>
        </select>
        <h4>Exibição:</h4>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Lista</option>
            <option>Galeria</option>
        </select>
    </div>
    <div class="DB">       
        </div>
    </section>
    @vite(['resources/js/Buttons-Dashbords.js'])
</x-layout-dashboard>