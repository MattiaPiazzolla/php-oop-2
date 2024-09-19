<?php 
    // Importo le classi
    require_once __DIR__."/models/Product.php";
    require_once __DIR__."/models/accessory.php";
    require_once __DIR__."/models/bed.php";
    require_once __DIR__."/models/Category.php";
    require_once __DIR__."/models/food.php";
    require_once __DIR__."/models/toy.php";
// Definisco le categorie
$dog = new Category('cani', 'fas fa-dog', '#dogs');
$cat = new Category('gatti', 'fas fa-cat', '#cats');

// Prodotti per cani
$foodDog = new Food('Bocconcini di pollo', './img/Natures-Recipe-Chicken-Barley-Brown-Rice-Small-Bites-Whole-Grain-Dry-Dog-Food-4LB-1024x1024.png', 50, $dog);
$foodDog->setType('secco');

$foodDogTwo = new Food('Sacco di crocchette', './img/harri_adult_dog_turkey_15kg_OPT_400x400.png.webp', 35, $dog);
$foodDogTwo->setType('secco');

$toyDog = new Toy('Palla in gomma', './img/s-l1600_1024x1024.jpg.webp', 15, $dog);
$toyDog->setMaterial('gomma');

$bedDog = new Bed('Cuccia in legno','./img/23636_pla_hundehuette_spike_classic_s_fg_8243_8.jpg', 150, $dog);
$bedDog->setSize('70x40x40');

$leashDog = new Accessory('Guinzaglio estensibile', './img/flexi-guinzaglio-cane-compact-blu_tx1178_6727-600x600.png', 25, $dog);
$leashDog->setSize('xl');

// Prodotti per gatti
$foodCat = new Food('Bocconcini di manzo', './img/WhiskasOceanFishAdultDryCatFood_f5bbf1f9-31dd-433e-99bd-00582d979f60.jpg.webp', 20, $cat);
$foodCat->setType('secco');

$foodCatTwo = new Food('Sacco di crocchette umido', './img/WhiskasTunainJellyAdultWetCatFood-85gmpacks.jpg.webp', 35, $cat);
$foodCatTwo->setType('umido');

$toyCat = new Toy('Palla di lana', './img/511KE8oxrsL.jpg', 15, $cat);
$toyCat->setMaterial('lana');

$toyCatTwo = new Toy('Laser', './img/615FxK5sB1L.jpg', 15, $cat);
$toyCatTwo->setMaterial('metallo');

$bedCat = new Bed('Cuccia di stoffa', './img/images.jpeg', 25, $cat);
$bedCat->setSize('20x15x20');

$collarCat = new Accessory('Collare', './img/Collare_gatto_Bobby_Safe_Rosso.jpg.webp', 25, $cat);
$collarCat->setSize('s');

// Array dei prodotti
$products = [
    $foodDog, 
    $foodDogTwo, 
    $toyDog, 
    $bedDog, 
    $leashDog, 
    $foodCat, 
    $foodCatTwo, 
    $toyCat, 
    $toyCatTwo,
    $bedCat, 
    $collarCat
];
?>