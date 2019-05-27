<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	

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
	public function getName() {
		return $this->name;
	}
	public function getPrice() {
		return $this->price;
	}
	abstract function setPrice($price);
}

class singleBook extends Good {
	public function __construct($sku, $name, $price) {
		parent::setSku($sku);
		$this->setName($name);
		$this->setPrice($price);
		echo "Новый штучный товар: артикул - ".$this->getSku().", название - ".$this->getName().", цена - ".$this->getPrice();
	}
	public function setPrice($price) {
		$this->price = $price;
	}
}

$b1 = new singleBook(1, "New book", 100);

?>
</body>
</html>