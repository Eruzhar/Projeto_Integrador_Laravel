<?php
$buttonLixeira = "<button type='button' id='row#' class='btn btn-primary' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Apagar Solicitação'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'> <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/> <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/> </svg> </button>";
$buttonOlho = "<button type='button' class='btn btn-primary' onclick='UpDateRegist()' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Mostrar Solicitação'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'> <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z'/> <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0'/> </svg> </button>";
$buttonEditar = "<button type='submit' class='btn btn-primary' data-bs-toggle='tooltip'    data-bs-placement='top'    data-bs-title='$#$'>  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eraser' viewBox='0 0 16 16'>    <path d='M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293z'/>    </svg></button>";
?>

<x-layout-dashboard title="Orçamentos Concluídos"  css="resources/css/dashboard/Orcamento.css">
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
          <a href='{{ route( 'orcamentosNovo') }}'>Novos</a>
        </li>
        <li>
          <a href='{{ route( 'orcamentosPendente') }}'>Pendentes</a>
        </li>
        <li>
          <a href='{{ route( 'orcamentosConcluido') }}'>Concluidos</a>
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
          <thead>
          <th scope='col' class='text-center'>#</th> 
          <th scope='col' class='text-center'>Contato</th>
          <th scope='col' class='text-center'>Nome</th>
          <th scope='col' class='text-center'>Evento</th>
          <th scope='col' class='text-center'>Data Evento</th>
          <th scope='col' class='text-center'>Acompanhemento</th>
          </thead>
          @if(isset($cotacoes))
            @foreach ($cotacoes as $cotacao)
              <thead>
                <tr id='id{{ $cotacao->id }}'>
                  <td scope='row' class='text-center'>{{ $cotacao->id }}</td>
                  <td class='text-center'>{{ $cotacao->telefone}}</td>
                  <td class='text-center'>{{ $cotacao->nome}}</td>
                  <td class='text-center'>{{ $cotacao->categoria_evento_id}}</td>
                  <td class='text-center'>{{ $cotacao->data_evento}}</td>
                  <td class='text-center'>
                    <div>
                      <?php echo(str_replace("row#","row" + $cotacao->id,$buttonLixeira))?>
                      <?php echo(str_replace("row#","row" + $cotacao->id, $buttonOlho))?>
                      <?php echo(str_replace("row#","row" + $cotacao->id,$buttonEditar))?>
                    </div>
                  </td>
                </tr>
              </thead>
            @endforeach
          @endif
        </table>
      </section>
    </div>  
  </div>
  @vite(['resources/js/Buttons-Orcamento.js'])
  </x-layout-dashboard>