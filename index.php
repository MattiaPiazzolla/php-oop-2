<?php 
require './classes/category.php';
require'./classes/products.php';

// definisco le istanze delle categorie
$dog = new Category('cani', 'fas fa-dog', '#dogs');
$cat = new Category('gatti', 'fas fa-cat', '#cats');


// definisco le istanze dei prodotti
// prodotti cani
$foodDog = new Product('bocconcini di pollo', '...', '50', $dog, 'cibo'); 
$toyDog = new Product('palla in gomma', '...', '15', $dog, 'giocattoli');
$bedDog = new Product('cuccia in legno', '...', '25', $dog, 'acessori');
$leashDog = new Product('guinzaglio estensibile', '...', '25', $dog, 'acessori');
$foodDogTwo = new Product('sacco di crocchette', '...', '35', $dog, 'cibo');
$jacketDog = new Product('giacca impermeabile', '...', '40', $dog, 'abbigliamento');

// prodotti gatti
$foodcat = new Product('bocconcini di manzo', '...', '50', $cat, 'cibo'); 
$toycat = new Product('palla in gomma', '...', '15', $cat, 'giocattoli');
$bedcat = new Product('cuccia di stoffa', '...', '25', $cat, 'acessori');
$leashcat = new Product('collare', '...', '25', $cat, 'acessori');
$foodCatTwo = new Product('sacco di crocchette', '...', '35', $cat, 'cibo');
$toyCatTwo = new Product('laser', '...', '15', $cat, 'abbigliamento');



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

</body>

</html>