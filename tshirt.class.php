<?php
// 4. Придумать наследников класса из п.1. Чем они будут отличаться?
// Товар - футболка. К общим для всех товаров полям добавляются размер и цвет
include "item.class.php";

class Tshirt extends Item {
    private $color;
    private $size;

    function setColor($color) {
        $this->color = $color;
    }
    function getColor() {
        return $this->color;
    }
    function setSize($size) {
        $this->size = $size;
    }
    function getSize() {
        return $this->size;
    }
    function __construct($sku, $name, $price, $description, $color, $size) {
        parent::__construct($sku, $name, $price, $description);
        $this->setColor($color);
        $this->setSize($size);
    }
}