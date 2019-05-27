<?php
abstract class Good {
	private $sku;
	private $name;
	private $price;
	
	public function setSku($sku) {
		$this->sku = $sku;
	}
	public function getSku() {
		return $this->sku;
	}
	public function setName($name) {
		$this->name = $name;
	}
	public function getSku() {
		return $this->name;
	}
	public function getPrice() {
		return $this->price;
	}
	abstract function setPrice();
}