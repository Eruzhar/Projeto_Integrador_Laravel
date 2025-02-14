<x-layout-dashboard title="Up Load"  css="resources/css/style.css">

    <x-header-dashboard></x-header-dashboard>
  <form>
      <h1>Upload de Imagens</h1>
      <div class="Area-UpLoad">
        <div class="Area-text">
          <div class="form-Imagem">
            <h4>Imagem</h4>
            <input
              type="file"
              class="Imagem-up"
              idplaceholder="Imagem"
              id="Imagem-up"
            />
            <x-button-limpar descricao="Lipar imagem">
                Metodo carregar imagem
            </x-button-limpar>
          </div>
          <div class="form-Titulo">
            <h4>Titulo</h4>
            <input type="text" class="Titulo-Imagem" placeholder="Titulo" id="Titulo-Imagem"/>
          </div>
          <br />
          <div class="form-Descrição">
            <h4>Descrição da imagem</h4>
            <input type="textArea" class="Descrição" placeholder="Descrição" id="Descrição"/>
          </div>
          <br />
            <x-button-enviar descricao="Salvar">
                              
            </x-button-enviar>
            <x-button-limpar descricao="Limpar formulário">
            </x-button-limpar>
            <a
            href='{{ route( 'cardapioDashboard') }}'>
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
</x-layout-dashboard>