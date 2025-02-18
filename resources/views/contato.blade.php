<x-layout title="Contato">
    @vite('resources/css/contato.css')
    <x-header></x-header>
    <main class="page d-grid">
        <aside class="d-flex flex-column contato1">
            <div class="email-group"></div>
            <div class="tel-group"></div>
            <p>OU</p><br>
            <p>Envie-nos uma mensagem! <i class="bi bi-send"></i></p>
        </aside>
        <section class="sn-main contato2">
            <div class="form-section">
                <form action="" method="post">
                    @csrf
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
                    <textarea class="form-control" id="mensagem" name="mensagem" rows="3" placeholder="Mensagem"></textarea>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </section>
    </main>    
    <x-footer></x-footer>
</x-layout>