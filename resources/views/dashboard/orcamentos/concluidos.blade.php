<x-layout-dashboard title="Orçamentos Concluídos"  css="resources/css/Orcamento.css">
  <x-header-dashboard></x-header-dashboard>
  <div class="c">
    <div class="sidebar">
      <a href= '{{ route( 'menu') }}'>
          <x-button-voltar descricao="Voltar">
          </x-button-voltar>
      </a>
      <br />
      <ul>
        <li>
          <a href='{{ route( 'orcamentosNovos') }}'>Novos</a>
        </li>
        <li>
          <a href='{{ route( 'orcamentosPendentes') }}'>Pendentes</a>
        </li>
        <li>
          <a href='{{ route( 'orcamentosConcluidos') }}'>Concluidos</a>
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
  </x-layout-dashboard>