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
        $format,
        $img,
    ) {
        $this->nameProduct = $nameProduct;
        $this->price = $price;
        $this->code = $code;
        $this->format = $format;
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


$kennel = [
    new kennel("Cuccy", 200, 12345, "large", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT-Foz7sQuPKOZRFcpPwCRme43snQboHuI6D9N3Lp-EYmTCpdVvY21ZSv0u7o8Q-N3xp3I&usqp=CAU"),

    new kennel("Castel cat", 250, 1345, "large", "https://images.demas.it/articoli/6801.jpg"),
];

$toy = [
    new toy("Osso", 15, 33223, "small", "https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/limoen/osso/8/400/217894_pla_limoen_bone_fg_0038_8.jpg"),
    new toy("Palla di Corda", 20, 112233, "small", "https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/tiaki/palla/di/corda/4/400/308998_pla_tiaki_spielzeug_seilball_fg_1018_4.jpg")
];


$food = [
    new food("Monge", 35, 15035, "medium", "https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_16__1_1.jpg?width=700&height=700&store=default&image-type=image"),
    new food("Purina-Adult", 50, 14235, "medium", "https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2022-10-18t091325.241_1.jpg?width=700&height=700&store=default&image-type=image")
];

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


    <div class="container">
        <h1></h1>
        <div class="row">
            <?php foreach ($kennel as $articolo) : ?>
                <div class="col">
                    <div class="card">
                        <h2>Name: <?php echo $articolo->nameProduct ?> </h2>
                        <h2>Price: <?php echo $articolo->price ?> </h2>
                        <h2>Code: <?php echo $articolo->code ?> </h2>
                        <h2>Format: <?php echo $articolo->format ?> </h2>
                        <img src="<?php echo $articolo->img ?>" alt="">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>


    <div class="container">
        <h1></h1>
        <div class="row">
            <?php foreach ($toy as $articolo) : ?>
                <div class="col">
                    <div class="card">
                        <h2>Name: <?php echo $articolo->nameProduct ?> </h2>
                        <h2>Price: <?php echo $articolo->price ?> </h2>
                        <h2>Code: <?php echo $articolo->code ?> </h2>
                        <h2>Format: <?php echo $articolo->format ?> </h2>
                        <img src="<?php echo $articolo->img ?>" alt="">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>


    <div class="container">
        <h1></h1>
        <div class="row">
            <?php foreach ($food as $articolo) : ?>
                <div class="col">
                    <div class="card">
                        <h2>Name: <?php echo $articolo->nameProduct ?> </h2>
                        <h2>Price: <?php echo $articolo->price ?> </h2>
                        <h2>Code: <?php echo $articolo->code ?> </h2>
                        <h2>Format: <?php echo $articolo->format ?> </h2>
                        <img src="<?php echo $articolo->img ?>" alt="">
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </script>
</body>

</html>