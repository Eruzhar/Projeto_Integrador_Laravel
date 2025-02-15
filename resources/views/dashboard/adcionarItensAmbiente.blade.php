<x-layout-dashboard title="Up Load"  css="resources/css/dashboard/style.css">

    <x-header-dashboard></x-header-dashboard>
    <form action="{{ route('storeAmbiente') }}" method="post">
      @csrf
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
              required
              />
              <x-button-limpar descricao="Limpar imagem">
                </x-button-limpar>
              </div>
            <div class="form-Titulo">
              <input type="text" class="Titulo-Imagem" id="tag" name="tag" value="ambiente" style="display: none;">
              <h4>Titulo</h4>
              <input type="text" class="Titulo-Imagem" placeholder="Titulo" id="titulo" name="titulo" required/>
            </div>
            <br />
            <div class="form-Descrição">
              <h4>Descrição da imagem</h4>
              <input type="textArea" class="Descrição" placeholder="Descrição" id="descricao" name="descricao" required/>
            </div>
            <br />
            <x-button-enviar descricao="Salvar">
                              
            </x-button-enviar>
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
    </f>
</x-layout-dashboard>