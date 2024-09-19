<?php 
    require_once __DIR__ ."/product.php";

    class Toy extends Product{
        protected $material; 

        function __construct($title, $image, $price,  Category $category, ){
            parent::__construct($title, $image, $price, $category);
        }

        public function setSize($material){
            $this->material = $material;
        }
        public function getSize(){
            return $this->material;
        }
        public function getClassName(){
            return get_class();
        }
    }

?>