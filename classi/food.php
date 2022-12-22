<?php

include_once __DIR__ . '/product.php';

class Food extends Product{
    public $weight;
    public $ingredients;

    public function __construct(
        String $image, 
        String $name, 
        Float $price,
        Category $category,

        String $weight,
        Array $ingredients
    )
    {
        parent::__construct($image, $name, $price, $category);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}

?>