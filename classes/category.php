<?php 
// definisco la classe delle categorie 
class Category {
    public $name;
    public $icon;
    public $url;
    // construct 
    public function __construct($name, $icon, $url) {
        $this->name = $name;
        $this->icon = $icon;
        $this->url = $url;
    }

    
}
?>