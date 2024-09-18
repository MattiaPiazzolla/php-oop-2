<?php 
require './classes/category.php';
require'./classes/products.php';

// definisco le istanze delle categorie
$dog = new Category('cani', 'fas fa-dog', '#dogs');
$cat = new Category('gatti', 'fas fa-cat', '#cats');


// definisco le istanze dei prodotti
// prodotti cani
$foodDog = new Product('bocconcini di pollo', './img/Natures-Recipe-Chicken-Barley-Brown-Rice-Small-Bites-Whole-Grain-Dry-Dog-Food-4LB-1024x1024.png', '50', $dog, 'cibo'); 
$toyDog = new Product('palla in gomma', './img/s-l1600_1024x1024.jpg.webp', '15', $dog, 'giocattoli');
$bedDog = new Product('cuccia in legno', './img/23636_pla_hundehuette_spike_classic_s_fg_8243_8.jpg', '25', $dog, 'acessori');
$leashDog = new Product('guinzaglio estensibile', './img/flexi-guinzaglio-cane-compact-blu_tx1178_6727-600x600.png', '25', $dog, 'acessori');
$foodDogTwo = new Product('sacco di crocchette', './img/harri_adult_dog_turkey_15kg_OPT_400x400.png.webp', '35', $dog, 'cibo');
$jacketDog = new Product('giacca impermeabile', './img/71sAMENolEL._AC_UF1000,1000_QL80_.jpg', '40', $dog, 'abbigliamento');

// prodotti gatti
$foodcat = new Product('bocconcini di manzo', './img/WhiskasOceanFishAdultDryCatFood_f5bbf1f9-31dd-433e-99bd-00582d979f60.jpg.webp', '20', $cat, 'cibo'); 
$toycat = new Product('palla in gomma', './img/511KE8oxrsL.jpg', '15', $cat, 'giocattoli');
$bedcat = new Product('cuccia di stoffa', './img/images.jpeg', '25', $cat, 'acessori');
$collarcat = new Product('collare', './img/Collare_gatto_Bobby_Safe_Rosso.jpg.webp', '25', $cat, 'acessori');
$foodCatTwo = new Product('sacco di crocchette', './img/WhiskasTunainJellyAdultWetCatFood-85gmpacks.jpg.webp', '35', $cat, 'cibo');
$toyCatTwo = new Product('laser', './img/615FxK5sB1L.jpg', '15', $cat, 'giocattoli');

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
                        <img src="<?php echo $product->image; ?>" class="card-img-top"
                            alt="<?php echo $product->title; ?>">
                        <div class="card-body">
                            <h5 class="card-title text-capitalize"><?php echo $product->title; ?></h5>
                            <p class="card-text">Prezzo: €<?php echo $product->price; ?></p>
                            <p class="card-text text-uppercase fs-6 text-secondary"><i
                                    class="<?php echo $product->category->icon; ?>"></i>
                                <?php echo $product->category->name; ?></p>
                            <p class="card-text">Tipo: <?php echo $product->type; ?></p>
                        </div>
                    </div>
                </div>
                <?php }; ?>
            </div>
        </div>
    </main>
</body>

</html>