@props(['name'=>'Nome do Drink','img'=>'255x216.svg'])
@vite(['resources/css/drink_card.css'])
<div class="drink_card border rounded">    
    <img src="{{asset(('img/drinks/'.$img))}}" alt="" class="card-img">
    <div class="card-header">
    <h1 class="card-name">{{ $name }}</h1>
    </div>
</div>