<?php 
class Category {
    public $name;
    public $icon;
    public $url;

    public function __construct($name, $icon, $url) {
        $this->name = $name;
        $this->icon = $icon;
        $this->url = $url;
    }
}
?>