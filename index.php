<?php

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

class cat extends article
{
    public function __construct(string $nameProduct, int $price, int $code, $format, $img)
    {
        parent::__construct($nameProduct, $price, $code, $format, $img);
    }
}

class dog extends article
{
    public function __construct(string $nameProduct, int $price, int
    $code, $format, $img)
    {
        parent::__construct($nameProduct, $price, $code, $format, $img);
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </script>
</body>

</html>