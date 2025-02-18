@props(['titulo'=>'Nome do drink','arquivo'=>'#','descricao'=>'Descrição do drink'])
@vite(['resources/css/drink_card.css'])
<div class="drink_card border rounded">    
    {{-- <img src="{{asset('img/drinks/'.$arquivo)}}" alt="" class="card-img"> --}}
    <img src="{{url('../../public/img/drinks/'.$arquivo)}}" alt="" class="card-img">    
    <div class="card-header">
        <h1 class="card-name">{{ $titulo }}</h1>
        <h2 class="card-desc">{{ $descricao }}</h2>
    </div>
</div>