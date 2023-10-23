<?php

$food = [
    new food("Ultima Cat", 35, 15035, "Medium", "https://shop-cdn-m.
mediazs.com/bilder/ultima/cat/tratto/urinario/crocchette/per/
gatto/4/400/
203708_pla_affinityspain_ultima_urinary_tract_es_10kg_hs_01_4.
jpg"),
    new food("Purina-Adult", 50, 14235, "Medium", "https://www.
bauzaar.it/media/catalog/product/g/r/
grafiche_prodotti_magento_600x600_-_2022-10-18t091325.241_1.jpg?
width=700&height=700&
store=default&image-type=image")
];


$kennel = [
    new kennel("Kennel for Cats", 50, 12345, "Small", "https://x.
cloudsdata.net/4r/images/products/large/5bee9da2ba23d_1.png"),

    new kennel("Sky Kennel", 250, 1345, "Large", "https://images.
demas.it/articoli/6801.jpg"),
];


$toy = [
    new toy("Osso per Cani ", 15, 33223, "Small", "https://
shop-cdn-m.mediazs.com/bilder/gioco/per/cani/limoen/osso/8/400/
217894_pla_limoen_bone_fg_0038_8.jpg"),
    new toy("Palla di Corda", 20, 112233, "Small", "https://
shop-cdn-m.mediazs.com/bilder/gioco/per/cani/tiaki/palla/di/
corda/4/400/308998_pla_tiaki_spielzeug_seilball_fg_1018_4.jpg")
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

<div class="container">
    <h1></h1>
    <div class="row">
        <?php foreach ($food as $articolo) : ?>
            <div class="col">
                <h1 class="text-center"> Our Food</h1>
                <div class="card">
                    <h2>Name: <?php echo $articolo->nameProduct ?> </ h2>
                        <h2>Price: € <?php echo $articolo->price ?> </h2>
                        <h2>Code: <?php echo $articolo->code ?> </h2>
                        <h2>Format:"<?php echo $articolo->format ?>"</h2>
                        <img src="<?php echo $articolo->img ?>" alt="">
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>