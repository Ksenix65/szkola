<?php
class Fruit {
    public $name;
    public $color;
function __construct($name,$color) {
    $this->name = $name;
    $this->color = $color;
    }
function get_name() {
    return $this->name;
}
function get_color() {
    return $this->color;
}
}
$apple = new Fruit("Apple","Red");
echo $apple->get_name();
echo $apple->get_color();
?>