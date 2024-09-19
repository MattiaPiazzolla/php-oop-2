<?php 
    class Product{
        public $title;
        public $image;
        public $price;
        public $category;

        public function __construct($title, $image, $price, Category $category){
            $this->title = $title;
            $this->image = $image;
            $this->price = $price;
            $this->category = $category;
        }

        public function getProductDetails(){
            $string = "Prezzo: ".$this->price. "€ <br>";
            $string .= "".$this->title."";
        }

        public function getClassName(){
            return get_class();
        }
    }
?>