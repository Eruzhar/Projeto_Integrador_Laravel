@props(['descricao'=>'nome', 'titulo'=>'nome', 'id'=>'nome','img'=>'nome'])
<div 
    class='card' 
    style='width: 22rem;' 
    id='card{{ $id }}'>
    <img class='card-img-top' src='{{ $img }}' alt=''>
    <div class='card-body'>
        <h3 class='card-title'> {{$titulo}}</h3>
        <h5 class='card-text'> {{$descricao}} </h5>
        <div class='button'>
            {{ $slot }}
        </div>
    </div>       
</div>