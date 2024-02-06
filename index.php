<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio di Prodotti per Animali</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <?php require_once(__DIR__ . "/db.php"); ?>
</head>
<body>
    <div class="container">
        <h1 class="my-4">Prodotti per Animali</h1>
        <div class="row">
            <?php foreach($prods as $prod): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <!-- Qui viene inserita l'immagine del prodotto -->
                        <img class="card-img-top" src="<?php echo $prod->getImage(); ?>" alt="<?php echo $prod->getTitle(); ?>">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $prod->getTitle(); ?></h4>
                            <p class="card-text"><?php echo $prod->getPrice(); ?> EURO</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Categoria: <?php echo $prod->getCategory()->getName(); ?></small>
                            <img src="<?php echo $prod->getCategory()->getIcon(); ?>" alt="" width="30">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Script di Bootstrap -->
</body>
</html>
