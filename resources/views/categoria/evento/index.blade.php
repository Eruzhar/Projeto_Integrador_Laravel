<?php
    $buttonLixeira = "<button type='submit' id='row#' class='btn btn-danger' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Apagar Solicitação'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'> <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/> <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/> </svg> </button>";
    $buttonEdit = "<button type='submit' id='#$#' class='btn btn-primary' onclick='saveItem()' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Editar Orçamento'>     <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>  <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/></svg></button>";
    $buttonPendente= "<button type='submit' name='Pendente' value='Pendente' class='btn btn-warning' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Mudar status para Pendente'>     <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-asterisk' viewBox='0 0 16 16'>  <path d='M8 0a1 1 0 0 1 1 1v5.268l4.562-2.634a1 1 0 1 1 1 1.732L10 8l4.562 2.634a1 1 0 1 1-1 1.732L9 9.732V15a1 1 0 1 1-2 0V9.732l-4.562 2.634a1 1 0 1 1-1-1.732L6 8 1.438 5.366a1 1 0 0 1 1-1.732L7 6.268V1a1 1 0 0 1 1-1'/> </svg></button>";
    $tituloPagina = "Categoria"
?>

<x-layout-dashboard title="{{$tituloPagina}}"  css="resources/css/dashboard/Orcamento.css">

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
          <a href='{{ route( 'categoria.bar.index') }}'>Bares</a>
        </li>
        <li>
          <a href='{{ route( 'categoria.evento.index') }}'>Eventos</a>
        </li>
        <li>
          <a href='{{ route( 'categoria.profissao.index') }}'>Profissões</a>
        </li>
     </ul>
    </div>
    <div class="conteudo">
      <div class="Cabeçalho">
        <h1></h1>
        <h1>{{$tituloPagina}}</h1>
        <a href='{{route('categoria.evento.novo')}}'>
          <x-button-novo descricao="Adicionar novo">
          </x-button-novo>
        </a>                
      </div>
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
          <th scope='col' class='text-center'>Nome</th>
          <th scope='col' class='text-center'>Descrição</th>
          <th scope='col' class='text-center'>Ações</th>
          </thead>
          @if(isset($categoria_eventos))
            @foreach ($categoria_eventos as $categoria_evento)
              <thead>
                <tr id='id{{ $categoria_evento->id }}'>
                  <td scope='row' class='text-center'>{{ $categoria_evento->id }}</td>
                  <td class='text-center'>{{ $categoria_evento->nome}}</td>
                  <td class='text-center'>{{ $categoria_evento->descricao}}</td>
                  <td class='text-center'>
                    <div>
                      <form action="{{ route('categoria.evento.destroy', ['id'=>$categoria_evento->id])}}" method="post" >
                        @csrf
                        @method("DELETE")
                        <?php echo(str_replace("row#","row" . $categoria_evento->id,$buttonLixeira))?>
                      </form>
                      <form action="{{ route('categoria.evento.edit', ['id'=>$categoria_evento->id])}}" method="get" >
                        @csrf
                        <?php echo(str_replace("row#","row" . $categoria_evento->id,$buttonEdit))?>
                    </form>
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
  <x-footer-dashboard></x-footer-dashboard>
  @vite(['resources/js/Buttons-Orcamento.js'])
</x-layout-dashboard>