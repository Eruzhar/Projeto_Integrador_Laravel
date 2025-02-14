<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Up Load</title>
    <script src="../JS/galeria.js" defer></script>
    @vite(['resources/css/style.css'])
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../CSS/NavBAR-FooterBAR.css">
  </head>
  <body>
    <x-header></x-header>
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
                Metodo salvar                
            </x-button-enviar>
            <x-button-limpar descricao="Limpar formulário">
            </x-button-limpar>
            <a
            href="#">
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
    <footer></footer>
    <x-script></x-script>
</body>
</html>
