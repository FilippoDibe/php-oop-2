<?php
    // require 
    require_once(__DIR__ . "/models/product.php");
    require_once(__DIR__ . "/models/category.php");
    require_once(__DIR__ . "/models/food.php");
    require_once(__DIR__ . "/models/animalHouse.php");

    //categorie 
    $cat_dog = new Category( 1, "Cane", "https://c8.alamy.com/compit/2a4pg50/icona-del-cane-design-mascotte-pet-natura-animale-carino-e-cucciolo-tema-illustrazione-vettoriale-2a4pg50.jpg");
    $cat_cat = new Category(1, "cat", "https://static.vecteezy.com/ti/vettori-gratis/p3/10145432-gatto-icona-vettore-isolato-simbolo-contorno-illustrazione-vettoriale.jpg");

    //prodotti 
    $prod_croccantini = new Food (1, "Croccantini", "https://m.media-amazon.com/images/I/41z8pR5M4vL.jpg", 35, $cat_dog, "10/10/2024");
    $prod_cuccia = new AnimalHouse (2,"Cuccia per cani", "https://media.zooplus.com/bilder/7/84503_pla_ferplast_sofa_anthrazit_7.jpg", 100, $cat_dog, "100x50x80");
    $prod_cibo_umido_gatti = new Food(201, "Cibo Umido per Gatti", "https://petmarket.it/16574-large_default/felix-busta-le-ghiottonerie-con-pollo-in-gel-gr85.jpg", 1.50, $cat_cat, "10/10/24");
    $prod_cuccia_gatti = new AnimalHouse(202, "Cuccia per Gatti", "https://media.adeo.com/marketplace/MKP/87472739/3e605ed47c9f621579548b1fb0ae6a56.jpeg?width=3000&height=3000&format=jpg&quality=80&fit=bounds", 30.99, $cat_cat, "60x45x50 ");

    $prods = [$prod_croccantini, $prod_cuccia, $prod_cibo_umido_gatti, $prod_cuccia_gatti];