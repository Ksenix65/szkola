<?php
class   Fruit   {
    public $name;
    public $color;
    public $weight;
    public function __construct($name, $color, $weight) {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
}
protected function intro() {
    echo "The fruit is {$this->name} and color is {$this->color}";
}
}

?>