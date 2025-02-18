<x-layout-dashboard title="Up Load"  css="resources/css/dashboard/style.css">

    <x-header-dashboard></x-header-dashboard>
    @if(isset($post))
      <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
      @csrf
      @method("PUT")
    @else
      <form action="{{ route('storeAmbiente') }}" method="post" enctype="multipart/form-data">
      @csrf
    @endif      
      <h1>Upload de Imagens</h1>
      <div class="Area-UpLoad">
        <div class="Area-text">
          <div>
            <h4>Imagem</h4>
            <input
            type="file"
              class="Imagem-up"
              idplaceholder="Imagem"
              id="arquivo"
              name="arquivo"
              value="@if(isset($post))<?php echo($post->arquivo)?> @endif"
              required
              />
              <x-button-limpar descricao="Limpar imagem">
                </x-button-limpar>
              </div>
            <div class="form-Titulo">
              <input type="text" class="Titulo-Imagem" id="tag" name="tag" value="ambiente" style="display: none;">
              <div style="display: none;">
                <input type="text" class="Titulo-Imagem" id="tag" name="tag" value="ambiente" style="display: none;">
              </div>
              <h4>Titulo</h4>
              <input type="text" class="Titulo-Imagem" placeholder="Titulo" id="titulo" name="titulo" required value="@if(isset($post))<?php echo($post->titulo)?> @endif"/>
            </div>
            <br />
            <div class="form-Descrição">
              <h4>Descrição da imagem</h4>
              <input type="textArea" class="Descrição" placeholder="Descrição" id="descricao" name="descricao" required value="@if(isset($post))<?php echo($post->descricao)?> @endif"/>
            </div>
            <br />
            @if(isset($post))
              <x-button-enviar descricao="Atualizar">
              </x-button-enviar>
          @else
              <x-button-enviar descricao="Salvar">
              </x-button-enviar>
          @endif

            <x-button-limpar descricao="Limpar formulário">
            </x-button-limpar>
            <a href='{{ route( 'ambienteDashboard') }}'>
              <x-button-voltar descricao="Voltar">
              </x-button-voltar>
            </a>
        </div>
        <div>
          <img
            id="ImagemUpLoad"
            src="{{ asset('img/istockphoto-1147544807-1024x1024.jpg')}}" alt=""/>
        </div>
      </div>
      </form>
      <x-footer-dasboard></x-footer-dasboard>
</x-layout-dashboard>