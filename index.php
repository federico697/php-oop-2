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

$prodotto1 = new Accessory('https://shop-cdn-m.mediazs.com/bilder/voliera/ferplast/bella/casa/2/140/71860_pla_vogelvoliere_bellacasa_back_2.jpg', 
'Voliera Ferplast Bella Casa', 184.99, $categories['uccello'], 'legno', 'M: L 83 x P 67 x H 153 cm');

var_dump($prodotto1);

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

var_dump($products);
?>