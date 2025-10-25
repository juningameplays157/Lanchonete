<link rel="stylesheet" href="/Lanchonete/header.css">
<header class="site-header" id="main-header">
    <div class="header-inner">
        <div class="brand">
            <div class="logo-circle">
                <img src="/Lanchonete/logo.png" alt="Logo Lanchonete">
            </div>
            <div class="brand-text">
                <h1>Big Bite Burguers</h1>
                <p class="tagline">Sabor e qualidade em cada mordida</p>
            </div>
        </div>
        
        <nav class="main-nav">
            <ul>
                <li><a href="index.php" class="nav-link">Início</a></li>
                <li><a href="cardapio.php" class="nav-link">Cardápio</a></li>
                <li><a href="contato.php" class="nav-link">Contato</a></li>
            </ul>
        </nav>
        
        <div class="header-actions">
            <a href="contato.php" class="order-button">Faça seu pedido</a>
        </div>
        
        <button class="mobile-menu-toggle" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('main-header');
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mainNav = document.querySelector('.main-nav');
    let lastScroll = 0;
    const headerHeight = header.offsetHeight;
    let scrollPosition = 0;
    let isMenuOpen = false;
    
    // Toggle do menu mobile
    function toggleMenu() {
        isMenuOpen = !isMenuOpen;
        
        if (isMenuOpen) {
            mainNav.style.display = 'block';
            document.body.style.overflow = 'hidden';
            mobileMenuToggle.classList.add('active');
            
            // Adiciona overlay
            if (!document.querySelector('.mobile-nav-overlay')) {
                const overlay = document.createElement('div');
                overlay.className = 'mobile-nav-overlay';
                document.body.appendChild(overlay);
                
                overlay.addEventListener('click', () => {
                    toggleMenu();
                });
            } else {
                document.querySelector('.mobile-nav-overlay').style.display = 'block';
            }
        } else {
            mainNav.style.display = 'none';
            document.body.style.overflow = '';
            mobileMenuToggle.classList.remove('active');
            
            if (document.querySelector('.mobile-nav-overlay')) {
                document.querySelector('.mobile-nav-overlay').style.display = 'none';
            }
        }
    }
    
    // Fechar menu ao clicar em um link
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', () => {
            if (isMenuOpen) {
                toggleMenu();
            }
        });
    });
    
    // Adicionar evento de clique no botão do menu mobile
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', toggleMenu);
    }
    
    // Fechar menu ao redimensionar a tela
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            if (window.innerWidth > 1024) {
                mainNav.style.display = '';
                document.body.style.overflow = '';
                isMenuOpen = false;
                mobileMenuToggle.classList.remove('active');
                
                if (document.querySelector('.mobile-nav-overlay')) {
                    document.querySelector('.mobile-nav-overlay').style.display = 'none';
                }
            } else if (!isMenuOpen) {
                mainNav.style.display = 'none';
            }
            
            // Adiciona/remove classe quando o scroll é maior que a altura do cabeçalho
            if (window.scrollY > 10) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            // Esconde/mostra header durante o scroll
            if (window.scrollY > lastScroll && window.scrollY > headerHeight) {
                // Scroll para baixo
                header.style.transform = 'translateY(-1000%)';
            } else {
                // Scroll para cima
                header.style.transform = 'translateY(0)';
            }
            
            lastScroll = window.scrollY;
        }, 250);
    });
    
    // Efeito de scroll no cabeçalho
    window.addEventListener('scroll', function() {
        const currentScroll = window.pageYOffset;
        const scrollDiff = lastScroll - currentScroll;
        
        // Atualiza a posição de rolagem
        scrollPosition = Math.min(Math.max(scrollPosition + scrollDiff, -headerHeight), 0);
        
        // Aplica o deslocamento ao header
        header.style.transform = `translateY(${scrollPosition}px)`;
        
        // Adiciona/remove classe quando o scroll é maior que a altura do cabeçalho
        if (window.scrollY > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        // Se estiver no topo da página, reseta a posição
        if (currentScroll <= 0) {
            scrollPosition = 0;
            header.style.transform = 'translateY(0)';
        }
        
        lastScroll = currentScroll <= 0 ? 0 : currentScroll;
    });
    
    // Transição instantânea
    header.style.transition = 'transform 0s';
    header.style.willChange = 'transform';
});
</script>
