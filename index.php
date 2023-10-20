<?php
require __DIR__ . "/layout.php";
require __DIR__ . "/Animals/Dog.php";
require __DIR__ . "/Animals/Cat.php";
require __DIR__ . "/Product/food.php";
require __DIR__ . "/Product/toy.php";
require __DIR__ . "/Product/kennel.php";

class article
{
    public $nameProduct;
    public $price;
    public $code;
    public $format;
    public $img;

    public function __construct(string $nameProduct, int $price, int $code, $format, $img)
    {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->code = $code;
        $this->format = $format;
        $this->img = $img;
    }
}
