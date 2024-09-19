<?php 
    require_once __DIR__ ."/product.php";

    class Bed extends Product{
        protected $type; 

        function __construct($title, $image, $price,  Category $category, ){
            parent::__construct($title, $image, $price, $category);
        }

        public function setSize($type){
            $this->type = $type;
        }
        public function getSize(){
            return $this->type;
        }
        public function getClassName(){
            return get_class();
        }
    }

?>