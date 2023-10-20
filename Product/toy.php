<?php

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

$toy = [
    new toy("Osso per Cani ", 15, 33223, "Small", "https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/limoen/osso/8/400/217894_pla_limoen_bone_fg_0038_8.jpg"),
    new toy("Palla di Corda", 20, 112233, "Small", "https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/tiaki/palla/di/corda/4/400/308998_pla_tiaki_spielzeug_seilball_fg_1018_4.jpg")
];

?>

<div class="container">
    <h1></h1>
    <div class="row">
        <?php foreach ($toy as $articolo) : ?>
            <div class="col">
                <h1 class="text-center"> Our Toy</h1>
                <div class="card">
                    <h2>Name: <?php echo $articolo->nameProduct ?> </h2>
                    <h2>Price: € <?php echo $articolo->price ?> </h2>
                    <h2>Code: <?php echo $articolo->code ?> </h2>
                    <h2>Format:"<?php echo $articolo->format ?>" </h2>
                    <img src="<?php echo $articolo->img ?>" alt="">
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>