<?php 
require_once './classes/category.php';
require_once './classes/type.php';
require_once './classes/products.php';

// Definisco le istanze delle categorie
$dog = new Category('cani', 'fas fa-dog', '#dogs');
$cat = new Category('gatti', 'fas fa-cat', '#cats');

// Definisco i tipi di prodotto
$food = new Type('cibo');
$toy = new Type('giocattoli');
$accessory = new Type('accessori');
$kennel = new Type('Cuccie');
$clothing = new Type('abbigliamento');

// Prodotti cani
$foodDog = new Product('bocconcini di pollo', './img/Natures-Recipe-Chicken-Barley-Brown-Rice-Small-Bites-Whole-Grain-Dry-Dog-Food-4LB-1024x1024.png', '50', $dog, $food); 
$toyDog = new Product('palla in gomma', './img/s-l1600_1024x1024.jpg.webp', '15', $dog, $toy);
$bedDog = new Product('cuccia in legno', './img/23636_pla_hundehuette_spike_classic_s_fg_8243_8.jpg', '25', $dog, $kennel);
$leashDog = new Product('guinzaglio estensibile', './img/flexi-guinzaglio-cane-compact-blu_tx1178_6727-600x600.png', '25', $dog, $accessory);
$foodDogTwo = new Product('sacco di crocchette', './img/harri_adult_dog_turkey_15kg_OPT_400x400.png.webp', '35', $dog, $food);
$jacketDog = new Product('giacca impermeabile', './img/71sAMENolEL._AC_UF1000,1000_QL80_.jpg', '40', $dog, $clothing);

// Prodotti gatti
$foodcat = new Product('bocconcini di manzo', './img/WhiskasOceanFishAdultDryCatFood_f5bbf1f9-31dd-433e-99bd-00582d979f60.jpg.webp', '20', $cat, $food); 
$toycat = new Product('palla in gomma', './img/511KE8oxrsL.jpg', '15', $cat, $toy);
$bedcat = new Product('cuccia di stoffa', './img/images.jpeg', '25', $cat, $kennel);
$collarcat = new Product('collare', './img/Collare_gatto_Bobby_Safe_Rosso.jpg.webp', '25', $cat, $accessory);
$foodCatTwo = new Product('sacco di crocchette', './img/WhiskasTunainJellyAdultWetCatFood-85gmpacks.jpg.webp', '35', $cat, $food);
$toyCatTwo = new Product('laser', './img/615FxK5sB1L.jpg', '15', $cat, $toy);

// Metto tutti i prodotti in un array
$products = [
    $foodDog, $toyDog, $bedDog, $leashDog, $foodDogTwo, $jacketDog, $foodcat, $foodCatTwo, $toycat, $bedcat, $collarcat, $toyCatTwo
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Pet Shop</title>
</head>

<body>
    <header class="bg-primary text-center text-light p-3 position-fixed z-2 w-100 m-0">
        <h4 class="m-0">
            Pet Shop
        </h4>
    </header>
    <main>
        <div class="container pb-5" style="padding-top:100px;">
            <div class="row">
                <?php foreach($products as $product) { ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card mb-4 shadow-sm">
                        <img src="<?php echo $product->getImage(); ?>" class="card-img-top"
                            alt="<?php echo $product->getTitle(); ?>">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize"><?php echo $product->getTitle(); ?></h5>
                            <p class="card-text">Prezzo: €<?php echo $product->getPrice(); ?></p>
                            <p class="card-text text-uppercase fs-6 text-secondary">
                                <i class="<?php echo $product->getCategory()->getIcon(); ?>"></i>
                                <?php echo $product->getCategory()->getName(); ?>
                            </p>
                            <p class="card-text text-capitalize">Tipo: <?php echo $product->getTypeName(); ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>