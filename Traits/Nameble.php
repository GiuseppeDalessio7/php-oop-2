<?php

trait Namable
{
    // Getter
    public function getNameProduct(): string
    {
        return $this->nameProduct;
    }


    /* Setter */
    public function setNameProduct($new_name)
    {
        $this->nameProduct = $new_name;
    }
}
