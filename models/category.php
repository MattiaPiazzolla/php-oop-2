<?php
class Category {
    private $name;
    private $icon;
    private $url;

    public function __construct($name, $icon, $url) {
        $this->name = $name;
        $this->icon = $icon;
        $this->url = $url;
    }

    public function getName() {
        return $this->name;
    }

    public function getIcon() {
        return $this->icon;
    }

    public function getUrl() {
        return $this->url;
    }
}
?>