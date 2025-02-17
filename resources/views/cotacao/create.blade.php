<x-layout title="Orçamento">
    @vite(['resources/css/cotacao.create.css'])
    <x-header></x-header>
    
    <main>
        <section class="chamada">
            <h1>Trabalhe Conosco</h1>
        </section>
        <section  class="formulario-container">
           <form action="" class="formulario" method="post" id="cotacao_form">
                @csrf
                <div class="cotacao_nome">
                    <label for="nome" class="form-label">Evento</label>
                    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nomeHelp">
                    <!--<div id="nomeHelp" class="form-text">Nome completo.</div>-->
                </div>
                <div class="cotacao_data">
                    <label for="data_evento" class="form-label">Data</label>
                    <input type="date" class="form-control" id="data_evento" name="data_evento">
                </div>
                <div class="cotacao_telefone">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Formato: (11) 99999-9999">
                </div>
                <div class="cotacao_email">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <!--<div id="emailHelp" class="form-text">Formato: 123@example.com</div>-->
                </div>
                <div class="cotacao_localidade">
                    <label for="localidade" class="form-label">Localidade</label>
                    <input type="text" class="form-control" id="localidade" name="localidade">
                </div>
                <div class="cotacao_qdtconv">
                    <label for="qtd_conv" class="form-label">Quantidade de Convidados</label>
                    <input type="number" class="form-control" id="qtd_convidados" name="qtd_convidados">
                </div>
                <div class="observacoes">
                    <label for="observacoes" class="form-label">Observações</label>
                    <textarea class="form-control" id="observacoes" name="observacoes" rows="3"></textarea>
                </div>
                <select name="status_cotacao_id" id="" class="status_cotacao">
                    @foreach($status_cotacoes as $status_cotacao)
                    <option value="{{$status_cotacao->id}}" href="#">{{$status_cotacao->nome}}</option>
                    @endforeach  
                </select>
                <select name="categoria_bar_id" id="" class="categoria_bar">
                    @foreach($categorias_bar as $categoria_bar)
                    <option value="{{$categoria_bar->id}}" href="#">{{$categoria_bar->nome}}</option>
                    @endforeach  
                </select>
                <select name="categoria_evento_id" id="" class="categoria_evento">
                    @foreach($categorias_evento as $categoria_evento)
                    <option value="{{$categoria_evento->id}}" href="#">{{$categoria_evento->nome}}</option>
                    @endforeach  
                </select>
                </div>
                <button type="submit" class="btn btn-primary btn-lg botao-custom" id="form-button">Enviar</button>
           </form>
        </section>
        @if(isset($message))
        <div class="alert alert-success" role="alert">{{ $message }}</div>
        @endif
    </main>
</x-layout>