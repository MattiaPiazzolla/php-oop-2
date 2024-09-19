<?php
require_once __DIR__ . "/Product.php";

class Toy extends Product {
    private $material;

    public function setMaterial($material) {
        $this->material = $material;
    }

    public function getMaterial() {
        return $this->material;
    }

    public function getProductDetails() {
        return parent::getProductDetails() . "<br> Materiale: " . $this->material;
    }
}
?>