<?php


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
    new kennel("Kennel for Cats", 50, 12345, "Small", "https://x.cloudsdata.net/4r/images/products/large/5bee9da2ba23d_1.png"),

    new kennel("Sky Kennel", 250, 1345, "Large", "https://images.demas.it/articoli/6801.jpg"),
];


?>

<div class="container">
    <h1></h1>
    <div class="row">
        <?php foreach ($kennel as $articolo) : ?>
            <div class="col">
                <h1 class="text-center"> Our Kennel</h1>
                <div class="card">
                    <h2>Name: <?php echo $articolo->nameProduct ?> </h2>
                    <h2>Price: € <?php echo $articolo->price ?> </h2>
                    <h2>Code: <?php echo $articolo->code ?> </h2>
                    <h2>Format: "<?php echo $articolo->format ?>" </h2>
                    <img src="<?php echo $articolo->img ?>" alt="">
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>