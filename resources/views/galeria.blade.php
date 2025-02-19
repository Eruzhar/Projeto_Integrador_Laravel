<x-layout title="Drinks e Bares">
    @vite(['resources/css/galeria.css'])
    <x-header></x-header>

    <main>
        <section class="drink-section">
            <h1>Drinks</h1>
            <div class="drink-grid">                
                @if(isset($drinks))
                    @foreach($drinks as $drink)                
                    <x-drink_card titulo="{{ $drink->titulo }}" arquivo="{{ $drink->arquivo }}" descricao="{{ $drink->descricao }}"></x-drink_card>
                    {{-- <x-drink_card titulo="{{ $drink->titulo }}" arquivo="drink 1.jpg" descricao="{{ $drink->descricao }}"></x-drink_card>--}}
                    @endforeach
                @else
                    <x-drink_card></x-drink_card>
                @endif
                {{-- <a href=""><img src="https://placehold.co/255x216" alt="drinkimg"></a>  --}}
            </div>
        </section>
        <section class="bar-section">
            <h1>Bares</h1>
            <div class="bar-grid">
                @if(isset($bares))
                    @foreach($bares as $bar)                
                    <x-drink_card titulo="{{ $bar->titulo }}" arquivo="{{ $bar->arquivo }}" descricao="{{ $bar->descricao }}"></x-drink_card>
                    {{-- <x-drink_card titulo="{{ $drink->titulo }}" arquivo="drink 1.jpg" descricao="{{ $drink->descricao }}"></x-drink_card>--}}
                    @endforeach
                @else
                    <x-drink_card></x-drink_card>
                @endif
            </div>
        </section>
        <section class="event-section">
            <h1>Eventos</h1>
            <div class="event-grid">
                @if(isset($eventos))
                    @foreach($eventos as $evento)                
                    <x-drink_card titulo="{{ $evento->titulo }}" arquivo="{{ $evento->arquivo }}" descricao="{{ $evento->descricao }}"></x-drink_card>
                    {{-- <x-drink_card titulo="{{ $drink->titulo }}" arquivo="drink 1.jpg" descricao="{{ $drink->descricao }}"></x-drink_card>--}}
                    @endforeach
                @else
                    <x-drink_card></x-drink_card>
                @endif
            </div>
        </section>
    </main>

</x-layout>