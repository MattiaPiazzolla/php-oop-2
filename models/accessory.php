<?php
require_once __DIR__ . "/Product.php";

class Accessory extends Product {
    private $size;

    public function setSize($size) {
        $this->size = $size;
    }

    public function getSize() {
        return $this->size;
    }

    public function getProductDetails() {
        return parent::getProductDetails() . "<br> Taglia: " . $this->size;
    }
}
?>