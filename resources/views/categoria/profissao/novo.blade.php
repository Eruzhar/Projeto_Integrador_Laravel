<?php $TituloPagina = "Enviar Dados - Clube Bar"?>
<x-layout-dashboard title="Categoria"  css="resources/css/dashboard/categoria.css">

<div class="container">
        <h1>{{ $TituloPagina}}</h1>

        <form action="{{ route('categoria.profissao.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" required placeholder="Digite o nome da nova profissão" value="@if(isset($profissao))<?php echo($profissao->nome)?> @endif">
            </div>

            <div class="form-group">
                <label for="descricao">Descrição</label>
                <textarea id="descricao" name="descricao" required placeholder="Descreva aqui..." value="@if(isset($profissao))<?php echo($profissao->nome)?> @endif"></textarea>
            </div>
            <a href="/dashboard/categoria/profissao">
                <x-button-voltar descricao="Voltar para categoria"></x-button-voltar>
            </a>
            <x-button-enviar descricao="Salvar"></x-button-enviar>
        </form>
    </div>
    <x-footer-dashboard></x-footer-dashboard>
</x-layout-dashboard>