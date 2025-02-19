<?php $TituloPagina = "Enviar Dados - Clube Bar"?>
<x-layout-dashboard title="Categoria"  css="resources/css/dashboard/categoria.css">
    <x-header-dashboard></x-header-dashboard>
    <div class="container">
        <h1>{{ $TituloPagina}}</h1>
        <form action="{{ route('categoria.profissao.update', $profissao->id) }}" method="post">
            @csrf
            @method("PUT")
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required value="@if(isset($profissao))<?php echo($profissao->nome)?> @endif">
            <label for="descricao">Descrição</label>
            <textarea  required id="descricao" name="descricao">@if(isset($profissao))<?php echo($profissao->descricao)?> @endif</textarea>
            <a href="/dashboard/categoria">
                <x-button-voltar descricao="Voltar para categoria"></x-button-voltar>
            </a>
            <x-button-salvar descricao="Salvar"></x-button-salvar>
        </form>
    </div>
<x-footer-dashboard></x-footer-dashboard>
</x-layout-dashboard>