<?php
    $pageName = "Acompanhamento de solicitação de orçamento";
?>
<x-layout-dashboard title="{{ $pageName }}" css="resources/css/dashboard/Dahsboard-Galeria.css">
    <x-header-dashboard></x-header-dashboard>
    <div class="Cabeçalho">
        <div></div>
        <h1>{{ $pageName }}</h1>
        <div></div>
    </div>
    <form action="{{ route('cotacao.update', ['id'=>$cotacao->id]) }}" class="formulario" method="post" id="cotacao_form">
        @csrf
        @method("PUT")
        <div class="Form">
            <div class="l">
                <h4 class="dado">Nome do Cotador: <?php echo(  $cotacao->nome )?></h4> 
                <h4 class="dado">Telefone:{{ $cotacao->telefone}}</h4>
                <h4 class="dado">Email: {{ $cotacao->email}}</h4>        
            </div>
            <div class="l">
                <h4 class="dado"> Data:{{date_format(new DateTime($cotacao->data_evento),"d/m/Y")}}</h4>
                <h4 class="dado">Localidade: {{ $cotacao->localidade}}</h4>
                <h4 class="dado"> Quantidade de Convidados: {{ $cotacao->qtd_convidados}}</h4>
            </div>
            <h4>Observações:</h4>
            <h4 class="Form">{{ $cotacao->observacoes}}</h4>
            <div class="l">
                <h4 >Tipo do evento: {{ $cotacao->categoria_evento_id}}</h4>
                <h4 >Tipo do bar: {{ $cotacao->categoria_bar_id}}</h4>
                <h4 ></h4>
            </div>
        <div class="Pendências">
            <label for="pendencias" class="form-label"><h4>Pendências:</h4></label>
            <textarea class="form-control" id="observacoes" name="observacoes" rows="5" cols="100" placeholder="Pendências"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg botao-custom" id="form-button">Salvar</button>
    </form>
    @if(isset($message))
    <div class="alert alert-success" role="alert">{{ $message }}</div>        
    @endif        
</div>
<x-footer-dashboard></x-footer-dashboard>
</x-layout-dashboard>