<?php

include_once __DIR__ . '/product.php';

class Accessory extends Product{

    public $material;
    public $size;

    public function __construct(
        String $image, 
        String $name, 
        Float $price, 
        Category $category,

        String $material,
        String $size    
    )
    {
        parent::__construct($image, $name, $price, $category);

        $this->material = $material;
        $this->size = $size;
    }
}



?>