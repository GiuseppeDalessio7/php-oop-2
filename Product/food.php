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
}
$food = [
    new food("Monge", 35, 15035, "Medium", "https://www.bauzaar.it/media/catalog/product/g/r/grafiche-magento-bauzaar_16__1_1.jpg?width=700&height=700&store=default&image-type=image"),
    new food("Purina-Adult", 50, 14235, "Medium", "https://www.bauzaar.it/media/catalog/product/g/r/grafiche_prodotti_magento_600x600_-_2022-10-18t091325.241_1.jpg?width=700&height=700&
store=default&image-type=image")
];

?>

<div class="container">
    <h1></h1>
    <div class="row">
        <?php foreach ($food as $articolo) : ?>
            <div class="col">
                <h1 class="text-center"> Our Food</h1>
                <div class="card">
                    <h2>Name: <?php echo $articolo->nameProduct ?> </h2>
                    <h2>Price: € <?php echo $articolo->price ?> </h2>
                    <h2>Code: <?php echo $articolo->code ?> </h2>
                    <h2>Format:"<?php echo $articolo->format ?>"</h2>
                    <img src="<?php echo $articolo->img ?>" alt="">
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>