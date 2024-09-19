<?php
require_once __DIR__ . "/Category.php";

class Product {
    protected $title;
    protected $image;
    protected $price;
    protected $category;

    public function __construct($title, $image, $price, Category $category) {
        $this->title = $title;
        $this->image = $image;
        $this->price = $price;
        $this->category = $category;
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

    public function getProductDetails() {
        return "Prezzo: €" . $this->price;
    }
}
?>