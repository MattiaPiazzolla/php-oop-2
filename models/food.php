<?php
require_once __DIR__ . "/Product.php";

class Food extends Product {
    private $type;

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function getProductDetails() {
        return parent::getProductDetails() . "<br> Tipo: " . $this->type;
    }
}
?>