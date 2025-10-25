<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio - Big Bite Burguers</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/cardapio.css">
</head>
<body>
    <?php include 'insert/header.php'; ?>
    
    <div class="main-container">
        <div class="description-wrapper">
            <div class="description-content">
                <h2>Nosso Cardápio</h2>
                <p>Delicie-se com nossas opções preparadas com ingredientes frescos e selecionados. Temos opções para todos os gostos, desde os tradicionais até criações exclusivas do nosso chef.</p>
                <div class="highlight-tags">
                    <span class="highlight-tag">🍔 Lanches Artesanais</span>
                    <span class="highlight-tag">🥤 Bebidas Geladas</span>
                    <span class="highlight-tag">🍟 Porções Generosas</span>
                </div>
            </div>
        </div>

        <div class="menu-container">
            <div class="menu-category">
                <h2 class="category-title">🍔 Lanches</h2>
                <div class="menu-items">
                    <div class="menu-item">
                        <div class="item-name">X-Burger Delícia</div>
                        <div class="item-description">Pão brioche, hambúrguer 180g, queijo prato, alface, tomate e molho especial.</div>
                        <div class="item-price">R$ 24,90</div>
                    </div>
                    
                    <div class="menu-item">
                        <div class="item-name">X-Salada Premium</div>
                        <div class="item-description">Pão australiano, hambúrguer 200g, queijo cheddar, alface, tomate, cebola roxa e molho especial.</div>
                        <div class="item-price">R$ 28,90</div>
                    </div>
                    
                    <div class="menu-item">
                        <div class="item-name">X-Bacon Clássico</div>
                        <div class="item-description">Pão brioche, hambúrguer 180g, queijo prato, bacon crocante, alface e maionese da casa.</div>
                        <div class="item-price">R$ 26,90</div>
                    </div>
                </div>
            </div>
            
            <div class="menu-category">
                <h2 class="category-title">🍟 Porções</h2>
                <div class="menu-items">
                    <div class="menu-item">
                        <div class="item-name">Batata Frita</div>
                        <div class="item-description">Porção de batata frita crocante, temperada com sal e ervas finas. Acompanha molho à sua escolha.</div>
                        <div class="item-price">R$ 18,90</div>
                    </div>
                    
                    <div class="menu-item">
                        <div class="item-name">Mandioca Frita</div>
                        <div class="item-description">Mandioca frita dourada e crocante por fora, macia por dentro. Acompanha molho de queijo.</div>
                        <div class="item-price">R$ 22,90</div>
                    </div>
                    
                    <div class="menu-item">
                        <div class="item-name">Isca de Frango</div>
                        <div class="item-description">Tiras de peito de frango empanadas e fritas. Acompanha molho barbecue e molho de mostarda e mel.</div>
                        <div class="item-price">R$ 29,90</div>
                    </div>
                </div>
            </div>
            
            <div class="menu-category">
                <h2 class="category-title">🥤 Bebidas</h2>
                <div class="menu-items">
                    <div class="menu-item">
                        <div class="item-name">Refrigerante Lata</div>
                        <div class="item-description">350ml. Opções: Coca-Cola, Guaraná, Fanta Laranja, Sprite.</div>
                        <div class="item-price">R$ 6,90</div>
                    </div>
                    
                    <div class="menu-item">
                        <div class="item-name">Suco Natural</div>
                        <div class="item-description">500ml. Opções: Laranja, Abacaxi, Maracujá, Morango.</div>
                        <div class="item-price">R$ 12,90</div>
                    </div>
                    
                    <div class="menu-item">
                        <div class="item-name">Água Mineral</div>
                        <div class="item-description">500ml. Com ou sem gás.</div>
                        <div class="item-price">R$ 5,00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include 'insert/footer.php'; ?>
</body>
</html>