<x-layout title="Trabalhe conosco">
    @vite(['resources/css/curriculo.index.css'])
    <x-header></x-header>
    <main>
        <section class="chamada">
            <h1>Trabalhe Conosco</h1>
        </section>
        <section  class="formulario-container">
           <form action="" class="formulario" method="post">
                <div class="formName">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" aria-describedby="nomeHelp">
                    <!--<div id="nomeHelp" class="form-text">Nome completo.</div>-->
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Vaga
                    </button>
                    <ul class="dropdown-menu">
                    {{--@foreach($vagas as $vaga)--}}
                    <li><a class="dropdown-item" id="opt1" href="#">Bartender</a></li>
                    <li><a class="dropdown-item" id="opt2" href="#">Backbar</a></li>
                    <li><a class="dropdown-item" id="opt3" href="#">Copeira</a></li>
                    <li><a class="dropdown-item" id="opt4" href="#">Garçom</a></li>
                    {{--@endforeach--}}
                    </ul>
                </div>
                <div class="mb-3 curriculo">
                    <label for="formFile" class="form-label">Currículo</label>
                    <input class="form-control" type="file" id="formFile" nome="curriculo">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" cols="100"
                     placeholder="Fale mais um pouco sobre suas experiências com bar"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg botao-custom" id="form-button" href="#" role="button">Enviar</button>
           </form>
        </section>
    </main>
</x-layout>