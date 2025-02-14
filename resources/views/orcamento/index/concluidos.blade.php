<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Orçamentos Concluídos</title>
    @vite(['resources/css/Orcamento.css'])
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../CSS/NavBAR-FooterBAR.css">
  </head>
  <body>
  <x-header></x-header>
    <div class="c">
      <div class="sidebar">
        <a href="Dashboard-Menu.html">
          <x-button-voltar descricao="Voltar">
          </x-button-voltar>
        </a>
        <br />
        <ul>
          <li>
            <a href='Orcamento-Novos.html'>Novos</a>
          </li>
          <li>
            <a href='Orcamento-Pendentes.html'>Pendentes</a>
          </li>
          <li>
            <a href='Orcamento-Concluidos.html'>Concluidos</a>
          </li>
         </ul>
      </div>
      <div class="conteudo">
        <h1>Orçamentos Concluídos</h1>
        <div class="form-outline" data-mdb-input-init>
          <input
            type="search"
            id="form1"
            class="form-control"
            placeholder="Buscar"
            aria-label="Search"
          />
        </div>
        <br />
        <section class="Lista">
          <table class="table">
          </table>
        </section>
      </div>  
  </div>
    <x-script></x-script>
  </body>
</html>
