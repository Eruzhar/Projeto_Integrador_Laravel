@props(['name'=>'Nome do Drink','img'=>'https://placehold.co/255x216'])
@vite(['resources/css/drink_card.css'])
<div class="drink_card border rounded">    
    <img src="{{asset('../public/img/drinks/255x216.svg')}}" alt="" class="card-img">
    <div class="card-header">
    <h1 class="card-name">{{ $name }}</h1>
    </div>
</div>