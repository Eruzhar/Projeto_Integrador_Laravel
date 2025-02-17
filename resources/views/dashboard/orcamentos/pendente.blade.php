<?php
$buttonLixeira = "<button type='submit' id='row#' class='btn btn-danger' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Apagar Solicitação'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'> <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/> <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/> </svg> </button>";
$buttonEdit = "<button type='button' id='#$#' class='btn btn-primary' onclick='saveItem()' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Editar Post'>     <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/></svg></button>";
?>

<x-layout-dashboard title="Orçamentos Pendentes"  css="resources/css/dashboard/Orcamento.css">
    <x-header-dashboard></x-header-dashboard>
    <div class="c">
        <div class="sidebar">
            <a href='{{ route( 'menu') }}'>
            <button type="button" class="btn btn-primary"
            data-bs-toggle="tooltip"
            data-bs-placement="top"
            data-bs-custom-class="custom-tooltip"
            data-bs-title="Voltar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
            </svg></button></a>
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
        <h1>Orçamentos Pendentes</h1>  
        <div class="form-outline" data-mdb-input-init>
            <input type="search" id="form1" class="form-control" placeholder="Buscar" aria-label="Search" />
        </div>
        <br/>
        <section class="Lista">
            <table class="table">
              <thead>
                <th scope='col' class='text-center'>#</th>
                <th scope='col' class='text-center'>Data Recebimento</th>
                <th scope='col' class='text-center'>Contato</th>
                <th scope='col' class='text-center'>Nome</th>
                <th scope='col' class='text-center'>Evento</th>
                <th scope='col' class='text-center'>Data Evento</th><th scope='col' class='text-center'>Pendência</th>
                <th scope='col' class='text-center'>Acompanhemento</th>
              </thead>
              @if(isset($cotacoes))
                @foreach ($cotacoes as $cotacao)
                  <thead>
                    <tr id='id{{ $cotacao->id }}'>
                      <td scope='row' class='text-center'>{{ $cotacao->id }}</td>
                      <td class='text-center'>{{ $cotacao->data_evento}}</td>
                      <td class='text-center'>{{ $cotacao->telefone}}</td>
                      <td class='text-center'>{{ $cotacao->nome}}</td>
                      <td class='text-center'>{{ $cotacao->categoria_evento_id}}</td>      
                      <td class='text-center'>{{ $cotacao->data_evento}}</td>
                      <td class='text-center'>{{ $cotacao->pendencia}}</td>
                      <td class='text-center'>
                        <div>
                          <form action="{{ route('cotacao.destroy', ['id'=>$cotacao->id])}}" method="post" >
                            @csrf
                            @method("DELETE")
                            <?php echo(str_replace("row#","row" . $cotacao->id,$buttonLixeira))?>
                          </form>
                        <?php echo(str_replace("row#","row" . $cotacao->id,$buttonEdit))?>                        </div>
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