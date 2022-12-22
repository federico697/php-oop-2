<?php

include_once __DIR__ . '/product.php';

class Toy extends Product{

    public $features;
    public $size;

    public function __construct(
        String $image,
        String $name, 
        Float $price, 
        Category $category,

        String $features,
        String $size
    )
    {
        parent::__construct($image, $name, $price, $category);
        $this->features = $features ;
        $this->size = $size;
    }
}

?>