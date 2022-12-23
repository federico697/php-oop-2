<?php
include_once __DIR__ . '/classi/accessory.php';
include_once __DIR__ . '/classi/toy.php';
include_once __DIR__ . '/classi/food.php';
include_once __DIR__ . '/classi/category.php';

$categories = [
    'gatto' => new Category ('Gatto', '<i class="fa-solid fa-cat"></i>'),
    'cane' => new Category ('Cane', '<i class="fa-solid fa-dog"></i>'),
    'pesce' => new Category ('Pesce', '<i class="fa-solid fa-fish"></i>'),
    'uccello' => new Category ('Uccello', '<i class="fa-solid fa-dove"></i>'),
];

// $prodotto1 = new Accessory('https://shop-cdn-m.mediazs.com/bilder/voliera/ferplast/bella/casa/2/140/71860_pla_vogelvoliere_bellacasa_back_2.jpg', 
// 'Voliera Ferplast Bella Casa', 184.99, $categories['uccello'], 'legno', 'M: L 83 x P 67 x H 153 cm');

// var_dump($prodotto1);

$products = [
    new Food('https://shop-cdn-m.mediazs.com/bilder/prezzo/speciale/royal/canin/puppy/royal/canin/adult/9/140/1_icon_percent_template_1000x1000_int_4_20__9.jpg', 
    'Royal Canin', 43.99, $categories['cane'], "545g", ['prosciutto', 'riso']),
    new Food('https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/pollo/fresco/1/140/26708_pla_almo_nature_holistic_adult_huhn_reis_medium_744_12kg_dog_1.jpg', 
    'Almo Nature', 44.99, $categories['cane'], "600g", ['manzo', 'cereali']),
    new Accessory('https://shop-cdn-m.mediazs.com/bilder/voliera/ferplast/bella/casa/2/140/71860_pla_vogelvoliere_bellacasa_back_2.jpg', 
    'Voliera Ferplast Bella Casa', 184.99, $categories['uccello'], 'legno', 'M: L 83 x P 67 x H 153 cm'),
    new Toy('https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/7/140/42535_pla_trixie_plueschmaus_grau_und_weiss_ret_01_7.jpg', 
    'Topini di peluche Trixie', 4.99, $categories['gatto'], 'morbido con codina in corda', '8.5 cm x 10 cm'),
];

// var_dump($products);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- mio css -->
    <link rel="stylesheet" href="./style.css">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
</head>
<body>

    <h1>pet shop</h1>

    <div class="container">
        <div class="row">

        <?php foreach( $products as $elem ) { ?>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $elem->image ?>" class="card-img-top" alt="<?php $elem->name ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $elem->name ?></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        <?php } ?>

        </div>
    </div>







    <!-- boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>