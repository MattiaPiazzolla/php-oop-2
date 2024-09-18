<?php 
// Definisco la classe Type
class Type {
    private $typeName;

    public function __construct($typeName) {
        $this->typeName = $typeName;
    }

    public function getTypeName() {
        return $this->typeName;
    }
}
?>