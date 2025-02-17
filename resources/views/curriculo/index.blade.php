<?php
$buttonLixeira = "<button type='submit' id='row#' class='btn btn-danger' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Apagar Solicitação'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'> <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/> <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/> </svg> </button>";
$buttonBaixar = "<button type='button' class='btn btn-info' onclick='UpDateRegist()' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Mostrar Solicitação'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-file-earmark-arrow-down-fill' viewBox='0 0 16 16'>   <path d='M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1m-1 4v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 0 1 .708-.708L7.5 11.293V7.5a.5.5 0 0 1 1 0'/> </svg> </button>";
?>

<x-layout-dashboard title="Curriculos"  css="resources/css/dashboard/Orcamento.css">
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
        </ul>
        </div>
        <div class="conteudo">
        <h1>Curriculos</h1>  
        <div class="form-outline" data-mdb-input-init>
            <div class="Filtro">
            <h4>Profissão:</h4>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Todas profissões</option>
                @if(isset($profissoes))
                  @foreach ($profissoes as $profissao)        
                    <option>{{$profissao->nome}}</option>
                    @endforeach
                @endif
            </select>
            <h4>Ordenar:</h4>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Nome</option>
                <option>indice</option>
                <option>Data de envio</option>
                <option>Profissão</option>
                </select>
            </div>      
            <input type="search" id="form1" class="form-control" placeholder="Buscar" aria-label="Search"/>
            </div>
            <br/>
            <section class="Lista">
            <table class="table">
                <thead>
                    <th scope='col' class='text-center'>#</th>
                    <th scope='col' class='text-center'>Data Recebimento</th>
                    <th scope='col' class='text-center'>Nome</th>
                    <th scope='col' class='text-center'>Profissão</th>
                    <th scope='col' class='text-center'>Informações</th>
                    <th scope='col' class='text-center'>Curriculo</th>
                </thead>
                @if(isset($curriculos))
                  @foreach ($curriculos as $curriculo)
                    <thead>
                        <tr id='id"+json[i].indice+"'>
                            <td scope='row' class='text-center'>{{ $curriculo->id }}</td>
                            <td class='text-center'>{{ date_format($curriculo->created_at,"d/m/Y")}}</td>
                            <td class='text-center'>{{$curriculo->nome}}</td>
                            <td class='text-center'>profissao FK traser</td>
                            <td class='text-center'>{{ $curriculo->informacoes}}</td>
                            <td class='text-center'>
                                <div>
                                    <form action="{{ route('curriculo.destroy', ['id'=>$curriculo->id])}}" method="post" >
                                        @csrf
                                        @method("DELETE")
                                        <?php echo(str_replace("row#","row" . $curriculo->id,$buttonLixeira))?>
                                    </form>
                                    <a href="#">
                                        <?php echo(str_replace("row#","row" . $curriculo->id, $buttonBaixar))?>
                                    </a>
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
    @vite(['resources/js/Buttons-Curriculos.js'])
</x-layout-dashboard>
