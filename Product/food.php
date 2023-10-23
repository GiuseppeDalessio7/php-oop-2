<?php
class food extends article
{
    public function __construct($nameProduct, $price, $code, $format, $img)
    {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->code = $code;
        $this->format = $format;
        $this->img = $img;
    }

    public function getClassName()
    {
        return get_class();
    }
}
