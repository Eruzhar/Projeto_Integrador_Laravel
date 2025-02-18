<?php $TituloPagina = "Enviar Dados - Clube Bar"?>
<x-layout-dashboard title="Categoria"  css="resources/css/dashboard/categoria.css">
    <x-header-dashboard></x-header-dashboard>
    <div class="container">
        <h1>{{ $TituloPagina}}</h1>
        <form action="{{ route('categoria.evento.update', $categoria_evento->id) }}" method="post">
            @csrf
            @method("PUT")
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required value="@if(isset($categoria_evento))<?php echo($categoria_evento->nome)?> @endif">
            <label for="descricao">Descrição</label>
            <textarea  required id="descricao" name="descricao">@if(isset($categoria_evento))<?php echo($categoria_evento->descricao)?> @endif</textarea>
            <a href="/dashboard/categoria/evento">
                <x-button-voltar descricao="Voltar para categoria"></x-button-voltar>
            </a>
            <x-button-enviar descricao="Salvar"></x-button-enviar>
        </form>
    </div>
<x-footer-dashboard></x-footer-dashboard>
</x-layout-dashboard>