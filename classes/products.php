<?php 
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
?>