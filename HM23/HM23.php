<?php
class Animal{

	protected $name;//свойство класса
	
	public function set_name ($value){ // метод класса
		$this->name = $value;// обращаемся к свойству класса
	}

	public function get_name (){// возврящает свойство
		return $this->name;
	}
}

$animal1= new Animal;// создаем обьект
$animal1->set_name("животное");// задаем значение

//echo $animal1->name. PHP_EOL;

echo $animal1->get_name() . PHP_EOL;


class Mammal extends Animal{

	protected $kind;

	
	public function set_move($value){
		$this->kind = $value;
	}
	public function get_move(){
		return $this->kind;
	}

}

$mammal1= new mammal;// создаем обьект
$mammal1->set_name("млекопетающее");// задаем значение
echo $mammal1->get_name() . PHP_EOL;

	//


class Lion extends Mammal{

	private $subspecies;
	public function set_subspecies($value){
		$this->voice = $value;
	}
	public function get_subspecies(){
		return $this->subspecies;
	}

}

$Lion1= new Lion;// создаем обьект
$Lion1->set_name("Лев");// задаем значение
echo $Lion1->get_name() . PHP_EOL;



	



// ?>