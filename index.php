<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card com Faixas Vermelhas</title>
    <link rel="stylesheet" href="style/style.css">

</head>

<body>
   

    
    <div class="main-container">
        <div class="description-wrapper">
            <div class="description-content">
                <h2>Bem-vindo à Lanchonete Delícia</h2>
                <p>Experimente nossos deliciosos lanches preparados com ingredientes frescos e selecionados. Temos opções para todos os gostos, desde os tradicionais até criações exclusivas do nosso chef.</p>
                <div class="highlight-tags">
                    <span class="highlight-tag">🍔 Lanches Artesanais</span>
                    <span class="highlight-tag">🥤 Bebidas Geladas</span>
                    <span class="highlight-tag">🍟 Porções Generosas</span>
                </div>
            </div>
        </div> 
<?php include 'insert/header.php'; ?>
        <div class="card-wrapper">
            <a href="cardapio.php">
                <div class="card">
                    <img src="capa.jpg" alt="Imagem do cardápio">
                    <div class="stripe top">Cardápio</div>
                    <div class="stripe bottom">Confira já</div>
                </div>
            </a>
        </div>
    </div>
    
    <?php include 'insert/footer.php'; ?>
</body>
</html>
