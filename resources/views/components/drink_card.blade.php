@props(['titulo'=>'Nome do drink','arquivo'=>'#','descricao'=>'Descrição do drink'])
@vite(['resources/css/drink_card.css'])
<div class="drink_card border rounded" style='width: 22rem;'>    
    {{-- <img src="{{asset('img/drinks/'.$arquivo)}}" alt="" class="card-img"> --}}
    <img src="{{ asset('/storage/uploads/'.$arquivo ) }}" alt="" class="card-img-top">    
    <div class="card-header">
        <h6 class="card-title">{{ $titulo }}</h6>
        <p class="card-text">{{ $descricao }}</p>
    </div>
</div>