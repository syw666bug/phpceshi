<?php
abstract class Father {
	public $sex;
	public $age;
	public $name;

	public function eat() {
		echo "吃";
	}
	abstract public function cry();
}
class Car extends Father {
	public function cry() {
		echo '喵喵喵';
	}
}
class Dog extends Father {
	public function cry() {
		echo '汪汪汪';
	}
}
$mao = new Car();
$mao->cry();
$mao->eat();
echo "<br>";
$gou = new Dog();
//$gou->cry();
$gou->eat();