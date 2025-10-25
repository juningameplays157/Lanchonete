<?php include 'insert/header.php'; ?>

<link rel="stylesheet" href="style/contato.css">

<main class="main-content">
    <section class="contact-section">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Entre em Contato</h2>
                <p>Estamos sempre prontos para atendê-lo. Entre em contato conosco através dos canais abaixo ou preencha o formulário ao lado.</p>
                
                <div class="contact-details">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Endereço</h3>
                            <p>Rua Pedro Passarele, 1234<br>Bairro Jardin Marina<br>Marilia - SP, 01001-000</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Telefone</h3>
                            <p><a href="tel:+5514974005896">(14) 97400-5896</a></p>
                            <p><a href="tel:+551133334444">(14) 7734-8900</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>E-mail</h3>
                            <p><a href="mailto:contato@bigbiteburgers.com.br">contato@bigbiteburgers.com.br</a></p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Horário de Funcionamento</h3>
                            <p>Segunda a Sábado: 11h às 23h<br>Domingo: 12h às 22h</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="contact-form">
                <h2>Envie sua Mensagem</h2>
                <form id="contactForm" action="enviar_contato.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Nome Completo *</label>
                        <input type="text" id="nome" name="nome" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">E-mail *</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="assunto">Assunto *</label>
                        <select id="assunto" name="assunto" class="form-control" required>
                            <option value="">Selecione um assunto</option>
                            <option value="Dúvidas">Dúvidas</option>
                            <option value="Elogios">Elogios</option>
                            <option value="Sugestões">Sugestões</option>
                            <option value="Reclamações">Reclamações</option>
                            <option value="Trabalhe Conosco">Trabalhe Conosco</option>
                            <option value="Outros">Outros</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="mensagem">Mensagem *</label>
                        <textarea id="mensagem" name="mensagem" class="form-control" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit">Enviar Mensagem</button>
                </form>
            </div>
        </div>
        
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3698.158314279598!2d-49.94746568507636!3d-22.2167465853301!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd6f5a1b3e1a5%3A0x9bfd2a5af303864!2sMar%C3%ADlia%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1620000000000!5m2!1spt-BR!2sbr" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</main>

<!-- Adicionando Font Awesome para os ícones -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Adicionando máscara para telefone -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
// Máscara para telefone
$(document).ready(function(){
    $('#telefone').mask('(00) 00000-0000');
    
    // Validação do formulário
    $('#contactForm').on('submit', function(e) {
        let isValid = true;
        
        // Validação básica dos campos obrigatórios
        $(this).find('[required]').each(function() {
            if ($(this).val() === '') {
                isValid = false;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
        });
        
        // Validação de e-mail
        const email = $('#email').val();
        if (email && !isValidEmail(email)) {
            isValid = false;
            $('#email').addClass('error');
        }
        
        if (!isValid) {
            e.preventDefault();
            alert('Por favor, preencha todos os campos obrigatórios corretamente.');
        }
    });
    
    function isValidEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }
});
</script>

<?php include 'insert/footer.php'; ?>