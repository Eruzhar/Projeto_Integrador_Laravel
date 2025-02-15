<?php
    $buttonEdit = "<button type='submit' id='#$#' class='btn btn-primary' onclick='saveItem()' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Salvar Alteração Post'>     <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-floppy' viewBox='0 0 16 16'>     <path d='M11 2H9v3h2z'/>     <path d='M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z'/>   </svg></button>";
    $buttonLixeira = "<button type='submit' id='#$#' class='btn btn-danger' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Deletar Post'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>     <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/>     <path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/>   </svg></button>";
    $buttonVisivel = "<button type='submit' class='btn btn-success' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Ocultar Post' style='display:none;' id='Ocultar-Post#$#'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye' viewBox='0 0 16 16'> <path d='M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z'/> <path d='M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0'/>       </svg>   </button>";
    $buttonOcultar = "<button type='submit' class='btn btn-warning' data-bs-toggle='tooltip' data-bs-placement='top' data-bs-custom-class='custom-tooltip' data-bs-title='Mostrar Post' style='display:none;' id='Mostrar-Post#$#'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-slash' viewBox='0 0 16 16'> <path d='M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z'/>  <path d='M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829'/>     <path d='M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z'/> </svg> </button>";
    $pageName = "Dashboard Cardapio";
 ?> 
<x-layout-dashboard title="{{ $pageName}}" css="resources/css/dashboard/Dahsboard-Galeria.css">
<x-header-dashboard></x-header-dashboard>
    <section>
        <div class="Cabeçalho">
            <a href='{{route('menu')}}'>
                <x-button-voltar descricao="Voltar">
                </x-button-voltar>
            </a>
            <h1>{{ $pageName }}</h1>
            <a href='{{route('cardapioNovo')}}'>
                <x-button-novo descricao="Adicionar novo">
                </x-button-novo>
            </a>                
        </div>
    <div class="Filtro">
        <h4>Ordem:</h4>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Nome</option>
            <option>Data</option>
            <option>Tamanho</option>
        </select>
        <h4>Exibição:</h4>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Lista</option>
            <option>Galeria</option>
        </select>
    </div>
        @if(isset($posts))
            <div class="DashBoard">       
                @foreach($posts as $post)
                    <div class='card' style='width: 22rem;' id='card{{$post->id}}'>
                        <img class='card-img-top' src='{{ $post->arquivo }}' alt=''>
                        <div class='card-body'>
                            <h3 class='card-title'>  {{$post->titulo}}</h3>
                            <h5 class='card-text'> {{$post->descricao}}</h5>
                            <div class='button'>
                                <form action="{{ route('editGaleria' , ['id'=>$post->id]) }}"method="get" >
                                    <?php echo( str_replace( "#$#","row" . $post->id, $buttonEdit));?>
                                </form>
                                <form action="{{ route('post.destroy', ['id'=>$post->id])}}" method="post" >
                                    @csrf
                                    @method("DELETE")
                                    <?php echo( str_replace( "#$#","row" . $post->id,$buttonLixeira));?>
                                </form>
                                <?php $buttonVisivelNew = $buttonVisivel?>
                                <?php $buttonOcultarNew = $buttonOcultar?>
                                @if($post->visibilidade == 1)
                                    <form action="{{ route('updateVisibilidade', ['id'=>$post->id])  }}" method="post">
                                        @csrf
                                        @method("PUT")
                                        <?php str_replace( "#$#", $post->id,$buttonVisivelNew);?>
                                        <?php echo(str_replace("style='display:none;'", "style='display: inline;'", $buttonVisivelNew)) ?>
                                    </form>
                                @endif
                                @if($post->visibilidade == 0)
                                    <form action="{{ route('updateVisibilidade', ['id'=>$post->id])  }}" method="post">
                                        @csrf
                                        @method("PUT")
                                        <?php str_replace("#$#", $post->id, $buttonOcultarNew);?>
                                        <?php echo(str_replace("style='display:none;'", "style='display: inline;'",$buttonOcultarNew)) ?>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach                     
            </div>
        @endif
    </section>
    @vite(['resources/js/Buttons-Dashbords.js'])
</x-layout-dashboard>