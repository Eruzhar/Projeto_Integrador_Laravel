<x-layout title="Trabalhe conosco">
    @vite(['resources/css/curriculo.create.css'])
    <x-header></x-header>
    <main>
        <section class="chamada">
            <h1>Trabalhe Conosco</h1>
        </section>
        <section  class="formulario-container">
           <form action="" class="formulario" method="post">
                <div class="formName">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="nomeHelp">
                    <!--<div id="nomeHelp" class="form-text">Nome completo.</div>-->
                </div>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Vaga
                    </button>
                    <ul class="dropdown-menu">
                        @foreach($profissoes as $profissao)
                        <li><a class="dropdown-item" id="{{$profissao->id}}" href="#">{{$profissao->name}}</a></li>
                        @endforeach                        
                    </ul>
                </div>
                <div class="mb-3 curriculo">
                    <label for="formFile" class="form-label">Currículo</label>
                    <input class="form-control" type="file" id="formFile" name="arquivo">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" cols="100" name="informacoes"
                     placeholder="Fale mais um pouco sobre suas experiências com bar"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-lg botao-custom" id="form-button">Enviar</button>
           </form>
        </section>
    </main>
</x-layout>