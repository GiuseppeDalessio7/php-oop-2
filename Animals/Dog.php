<?php

class dog extends article
{
    public function __construct(string $nameProduct, int $price, int
    $code, $format, $img)
    {
        parent::__construct($nameProduct, $price, $code, $format, $img);
    }
}
