<?php 
    require_once __DIR__ ."/product.php";

    class Accessoy extends Product{
        protected $size; 

        function __construct($title, $image, $price,  Category $category, ){
            parent::__construct($title, $image, $price, $category);
        }

        public function setSize($size){
            $this->size = $size;
        }
        public function getSize(){
            return $this->size;
        }
        public function getClassName(){
            return get_class();
        }
    }

?>