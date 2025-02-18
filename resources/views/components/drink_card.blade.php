@props(['titulo'=>'Nome do drink','arquivo'=>'#','descricao'=>'Descrição do drink'])
@vite(['resources/css/drink_card.css'])
<div class="drink_card border rounded" style='width: 22rem;'>    
    {{-- <img src="{{asset('img/drinks/'.$arquivo)}}" alt="" class="card-img"> --}}
    <img src="{{ asset('/storage/uploads/'.$arquivo ) }}" alt="" class="card-img-top">    
    <div class="card-header">
        <h1 class="card-title">{{ $titulo }}</h1>
        <h2 class="card-text">{{ $descricao }}</h2>
    </div>
</div>