<?php 
// definisco la classe delle categorie 
class Category {
    public $name;
    public $icon;
    public $url;
    // construct 
    public function __construct($name, $icon, $url) {
        $this->name = $name;
        $this->icon = $icon;
        $this->url = $url;
    }

    
}

// definisco le istanze delle categorie
$dog = new Category('cani', 'fas fa-dog', '#dogs');
$cat = new Category('gatti', 'fas fa-cat', '#cats');

// definisco la classe dei prodotti 
class Product {
    public $title;
    public $image;
    public $price;
    public $category;
    public $type;
    public function __construct($title, $image, $price, Category $category, $type) {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type; 
    }
}
// definisco le istanze dei prodotti
$foodDog = new Product('Bocconcini di pollo', '...', '50', $dog, 'cibo'); 
$foodCat = new Product('crocchettine di manzo', '...', '20', $cat, 'cibo');


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