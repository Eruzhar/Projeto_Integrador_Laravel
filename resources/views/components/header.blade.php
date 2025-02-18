<header class="d-flex justify-content-between">
    @vite(['resources/css/header.css'])
        <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" class="logo"></a>
        <ul>
            <li><a href="{{ route('galeria') }}" class="header-link cardapio">Cardápio</a></li>
            {{-- <li><a href="#" class="header-link">Eventos</a></li>
            <li><a href="#" class="header-link">Depoimentos</a></li>
            <li><a href="#" class="header-link">Contato</a></li>--}}
        </ul>
        <div class="header-nav" method="post">
            <a href="https://www.facebook.com/clubebarcoquetelaria/"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/clubebar/"><i class="bi bi-instagram"></i></a>
            <a href="https://br.linkedin.com/in/clube-bar-108939209"><i class="bi bi-linkedin"></i></a>
            {{--<button type="submit" class="reservar-button">Reservar</button>--}}
            <a class="btn btn-primary botao-custom" id="reservar-button" href="{{ route('cotacao.create') }}" role="button">Reservar</a>
        </div>
</header>