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
}

class toy extends article
{
    public function __construct(
        $nameProduct,
        $price,
        $code,
        $img
    ) {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->code = $code;
        $this->img = $img;
    }
}
class kennel extends article
{
    public function __construct(
        $nameProduct,
        $price,
        $code,
        $format,
        $img
    ) {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->code = $code;
        $this->format = $format;
        $this->img = $img;
    }
}

$cuccia_1 = new kennel("Cuccy", 200, 12345, "large", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-Foz7sQuPKOZRFcpPwCRme43snQboHuI6D9N3Lp-EYmTCpdVvY21ZSv0u7o8Q-N3xp3I&usqp=CAU")



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop ANIMALS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <h2><?php echo $cuccia_1->nameProduct ?>
        <?php echo $cuccia_1->price ?>
        <?php echo $cuccia_1->code ?>
        <?php echo $cuccia_1->format ?>
    </h2>
    <img src="<?php echo $cuccia_1->img ?>" alt="">
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>