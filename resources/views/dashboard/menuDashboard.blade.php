<x-layout-dashboard title="Dashboard - Menu"  css="resources/css/dashboard/Dashboard-Menu.css">

    <x-header-dashboard></x-header-dashboard>
    <div class="Menu">
        <h1>Dashboard Loja</h1>
        <section>
            <div>
                <a href='{{route('galeriaDashboard')}}'><button type="button" class="btn btn-primary">Galeria</button></a>
                <a href='{{route('cardapioDashboard')}}'><button type="button" class="btn btn-primary">Cardapio</button></a>
            </div>
            <div>
                <a href='{{route('ambienteDashboard')}}'><button type="button" class="btn btn-primary">Ambiente</button></a>
                <a href='{{route('orcamentosNovo')}}'><button type="button" class="btn btn-primary">Orçamentos</button></a>
            </div>
            <div>
                <a href={{ route ('curriculo.index')}}><button type="button" class="btn btn-primary">Curriculos</button></a>
                <a href='{{route('categoria.profissao.index')}}'><button type="button" class="btn btn-primary">Categorias</button></a>
            </div>
        </section>
    </div>
    <x-footer-dashboard></x-footer-dashboard>
</x-layout-dashboard>