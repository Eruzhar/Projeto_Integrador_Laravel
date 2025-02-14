<x-layout-dashboard title="Curriculos"  css="resources/css/Orcamento.css">


    <x-header></x-header>
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
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>Todas profissões</option>
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
            </table>
            </section>
        </div>
    </div>
</x-layout-dashboard>
