<?php 
require_once __DIR__ . '/category.php';
require_once __DIR__ . '/type.php';

// Definisco la classe Product che estende Type
class Product {
    private $title;
    private $image;
    private $price;
    private $category;
    private $type; 

    public function __construct($title, $image, $price, Category $category, Type $type) {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getCategory() {
        return $this->category;
    }

    public function getTypeName() {
        return $this->type->getTypeName();
    }
}

?>