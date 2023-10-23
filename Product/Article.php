<?php

require ROOT .  "/Traits/Nameble.php";
class article
{

    use Namable;


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



/*

TRY AND CATCH 

*/

class Example

{
    public function NumberCode($code, $maxCode)

    {
        if ($code > $maxCode) {
            throw new Exception("Hai inserito un numero troppo grande");
        }
        return "Il valore inserito è : " . $code;
    }
}

$example = new Example(); // Creare un'istanza della classe Example
$code = 30000; // Ad esempio, il numero da controllare
$maxCode = 30000; // Valore massimo consentito

try {
    $result = $example->NumberCode($code, $maxCode); // Chiamare il metodo sull'oggetto $example
    echo "Risultato: $result";
} catch (Exception $error) {
    echo "Si è verificato un errore: " . $error->getMessage();
}
