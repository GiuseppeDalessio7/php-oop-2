<?php
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

    public function getNameProduct(): string
    {
        return $this->nameProduct;
    }
}
