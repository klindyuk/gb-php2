<?php
// Задача 1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: продукт, ценник, посылка и т.п.
// 2. Описать свойства класса из п.1 (состояние).
// 3. Описать поведение класса из п.1 (методы).

// класс товара
class Item {
    private $sku; // артикул
    private $name; // наименование
    private $price; // цена
    private $description; // описание

    function getSku () {
        return $this->sku;
    }
    function setSku ($sku) {
        $this->sku = $sku;
    }
    function getName () {
        return $this->name;
    }
    function setName ($name) {
        $this->name = $name;
    }
    function getPrice () {
        return $this->price;
    }
    function setPrice ($price) {
        $this->price = $price;
    }
    function getDescription () {
        return $this->description;
    }
    function setDescription ($description) {
        $this->description = $description;
    }

    function __construct($sku, $name, $price, $description) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
    }

    function show() {
        echo "<h2>$this->name</h2><div class=\"sku\">$this->sku</div><p>$this->description</p><div class=\"price\">$this->price</div>";
    }
}

$item1 = new Item(1, "Bag", 200, "Cool bag");
$item1->show();
