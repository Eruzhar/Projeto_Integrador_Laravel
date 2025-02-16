<?php
$buttonLixeira = "<button type='button' id='row#' class='btn btn-primary' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Apagar Solicitação'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'> <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/> <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/> </svg> </button>";
$buttonOlho = "<button type='button' class='btn btn-primary' onclick='UpDateRegist()' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Mostrar Solicitação'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'> <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z'/> <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0'/> </svg> </button>";
$buttonEditar = "<button type='submit' class='btn btn-primary' data-bs-toggle='tooltip'    data-bs-placement='top'    data-bs-title='$#$'>  <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eraser' viewBox='0 0 16 16'>    <path d='M8.086 2.207a2 2 0 0 1 2.828 0l3.879 3.879a2 2 0 0 1 0 2.828l-5.5 5.5A2 2 0 0 1 7.879 15H5.12a2 2 0 0 1-1.414-.586l-2.5-2.5a2 2 0 0 1 0-2.828zm2.121.707a1 1 0 0 0-1.414 0L4.16 7.547l5.293 5.293 4.633-4.633a1 1 0 0 0 0-1.414zM8.746 13.547 3.453 8.254 1.914 9.793a1 1 0 0 0 0 1.414l2.5 2.5a1 1 0 0 0 .707.293H7.88a1 1 0 0 0 .707-.293z'/>    </svg></button>";
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
            <input type="search" id="form1" class="form-control" placeholder="Buscar" aria-label="Search" />
            </div>
            <br/>
            <section class="Lista">
            <table class="table">
                <thead>
                    <th scope='col' class='text-center'>#</th>
                    <th scope='col' class='text-center'>Data Recebimento</th>
                    <th scope='col' class='text-center'>Profissão</th>
                    <th scope='col' class='text-center'>Nome</th>
                    <th scope='col' class='text-center'>Informações</th>
                    <th scope='col' class='text-center'>Curriculo</th>
                </thead>
                @if(isset($curriculos))
                  @foreach ($curriculos as $curriculo)
                    <thead>
                        <tr id='id"+json[i].indice+"'>
                            <td scope='row' class='text-center'>id</td>
                            <td class='text-center'>dataRecebimento</td>
                            <td class='text-center'>profissao </td>
                            <td class='text-center'>nome</td>
                            <td class='text-center'>informacoes</td>
                            <td class='text-center'>
                                <div>
                                    <?php echo(str_replace("row#","row" + $curriculo->id,$buttonLixeira))?>
                                    <?php echo(str_replace("row#","row" + $curriculo->id, $buttonOlho))?>
                                    <?php echo(str_replace("row#","row" + $curriculo->id,$buttonEditar))?>
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
