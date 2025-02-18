<header class="d-flex justify-content-between">
        <a href=""><img src="{{ asset('img/logo.png') }}" alt="" class="logo"></a>
        <ul>
            <li><a href="{{ route( 'menu') }}" class="header-link">Dashboard</a></li>
            <li><a href="{{ route( 'galeriaDashboard') }}" class="header-link">Galeria</a></li>
            <li><a href="{{ route( 'cardapioDashboard') }}" class="header-link">Cardápios</a></li>
            <li><a href="{{ route( 'ambienteDashboard') }}" class="header-link">Ambientes</a></li>
            <li><a href="{{ route( 'orcamentosNovo') }}" class="header-link">Orçamentos</a></li>
            <li><a href="{{ route( 'curriculo.index') }}" class="header-link">Currículos</a></li>
            <li><a href='{{route('profissao.index')}}'  class="header-link">Profissões</a></li>
        </ul>
        <div class="header-nav" method="post">
            <a href="https://www.facebook.com/clubebarcoquetelaria/"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/clubebar/"><i class="bi bi-instagram"></i></a>
            {{--<button type="submit" class="reservar-button">Reservar</button>--}}
            <a class="btn btn-primary botao-custom" id="reservar-button" href="" role="button">Reservar</a>
        </div>
</header>