<x-layout-dashboard title="Dashboard Galeria" css="resources/css/Dahsboard-Galeria.css">
    <x-header></x-header>
    <section>
        <div class="Cabeçalho">
            <h1>Dahsboard-Galeria</h1>
            <div>
                <a href='{{route('menu')}}'>
                    <x-button-voltar descricao="Voltar">
                    </x-button-voltar>
                </a>
                <a href='{{route('galeriaNovo')}}'>
                    <x-button-novo descricao="Adicionar novo">
                    </x-button-novo>
                </a>                
            </div>
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
</x-layout-dashboard><!DOCTYPE html>