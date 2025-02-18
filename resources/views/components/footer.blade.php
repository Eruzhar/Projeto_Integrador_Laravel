@vite(['resources/css/footer.css'])
<footer>
    <div class="d-grid footer-container">                        
    <p class="footer-item"><a href="{{ route('sobrenos') }}" class="footer-link c1">Sobre nós</a></p>
        <div class="vr c2"></div>                
        <p class="footer-item"><a href="{{ route('curriculo.create') }}" class="footer-link c3">Trabalhe Conosco</a></p>        
        {{-- <div class="vr c4"></div>
        <p class="footer-item"><a href="{{ route('sobrenos') }}" class="footer-link c5">Sobre nós</a></p>
        <p class="footer-item"><a href="" class="footer-link c5">Perguntas Frequentes</a></p>--}}
    </div>
    
    <div class="copyright">
        <p>© 2025 Clube Bar. Todos os direitos reservados.</p>
    </div>
</footer>