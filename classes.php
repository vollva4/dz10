<?php
interface duckImplement {
    public function duckInfo();
}
interface penImplement {
    public function penInfo();
}
interface carImplement {
    public function carInfo();
}
interface teleImplement {
    public function teleInfo();
}
interface productImplement {
    public function productInfo();
}
class Item {
	public $brand;
	public $model;
	public $color;
	public $price;
	public $discount;
	public function __construct($brand, $model, $price, $discount = 0) {
		$this->brand = $brand;
		$this->model = $model;
		$this->price = $price;
		$this->discount = $discount;
	}
	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}
}
class Car extends Item implements carImplement {

	public $ecoClass;
	public $power;
	public $class;
	public function __construct($brand, $model, $price, $discount = 0 ) {
		parent::__construct($brand, $model, $price, $discount = 0);
		echo 'Выпущена новая машина: ' . $brand . ' ' . $model .  ' За ' . $price . '.    ';
	}
	public function carInfo () {
		echo '<br>';
		print_r($this);
	}
	/*public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}*/
}

class Tele extends Item implements teleImplement  {
	public $diagonal;
	public function __construct($brand, $model, $price, $discount ) {
		parent::__construct($brand, $model, $price, $discount);
		echo 'В продаже появился новый телефон: ' . $brand . ' ' . $model .  ' За ' . $price . '.    ';
	}
	public function teleInfo () {
		echo '<br>';
		print_r($this);
	}
	/*public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}*/
}

class Pen extends Item implements penImplement{
	public $type;
	public function penInfo () {
		echo '<br>';
		print_r($this);
	}
	/*public function __construct($brand, $model, $price, $diagonal) {
		$this->brand = $brand;
		$this->model = $model;
		$this->price = $price;
		$this->diagonal = $diagonal;
		echo 'Телефизор года: ' . $brand . ' ' . $model .  ' За ' . $price . '.    ';
	}
	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}*/

}


class Duck implements duckImplement{
	public $name;
    public $mainland;
    public $total_length;
    public function __construct($name, $mainland, $total_length)
    {
        $this->name = $name;
        $this->mainland = $mainland;
        $this->total_length = $total_length;
    }
    public function duckInfo () {
		echo '<br>';
		print_r($this);
	}




}
class Product extends Item implements productImplement{
	public $category;
	public $size;
	public function productInfo () {
		echo '<br>';
		print_r($this);
	}
	/*public function __construct($brand, $model, $category, $size, $price) {
		$this->brand = $brand;
		$this->model = $model;
		$this->category = $category;
		$this->size = $size;
		$this->price = $price;
	}
	public function changePrice ($newprice) {
		$this->price = $newprice;
	}
	public function setDiscount ($newdiscount) {
		$this->discount = $newdiscount;
	}
	public function getPrice () {
		return $this->price;
	}
	public function getPriceWithDiscount () {
		return $this->price - ($this->price/100*$this->discount);
	}*/
}

$shoes = new Product ('Nike', 'xxx', 'shoes', '39', 50);
$t_short = new Product ('Cropp', 'Cropp', 'T-short', 'S', 10);
$Duck1 = new Duck('Mergellus albellus','Eurasia', '38—44 см');
$Duck2 = new Duck('Dendrocygna bicolor','Africa', '45—53 см');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Netology Lesson 9</title>
</head>
<body>
	<div style="width: 80%; margin: 0 auto;">
		<h2>PHP > урок 10</h2>
		<p><strong>1. </strong>Наследованием в ООП является возможность использования свойств и методов (кроме private) родительского класса дочерними,
    при этом существует возможность расширения функционала путем добавления в дочерние классы методов и свойств,
    возможность переопределения (множество реализаций) родительского кода и называется полиморфизмом.</p>
		<p><strong>2. </strong> Абстрактные классы могут содержать в себе как свойства так и методы с логикой и сигнатурами (можно и без них),
    множественное extends невозможно в отличие от implements интерфейсов.
    В интерфейсах могут быть константы и методы (строго без логики), с сигнатурами и без них. От интерфейсов нельзя создавать объекты,
    методы интефейсов могут быть только public.</p>
    <p><strong>3. </strong> Интерфейсы необходимо применять в том случае когда у нас существует некоторое количество задач требующее создания множества
    абстрактных классов с подобным функционалом. В противном случае можно обойтись абстрактными классами.</p>
		<pre>
			<?php
			$car1 = new Car('bmw',' X3', 1900000);
			echo '<br>';
			$tele1 = new Tele('lg','g22', 50000, 10);
			echo 'Цена с учетом скидки: ' . $tele1->getPriceWithDiscount ();
			echo '<br>';
			$tele1->changePrice (100000);
			print_r($tele1);
			echo '<br>';
			print_r($Duck1);
			print_r($Duck2);
			echo '<br>';
			print_r($shoes);
			print_r($t_short);
			$car1->carInfo();
			?>	
	</div>
</body>
</html>