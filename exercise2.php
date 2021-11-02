<?php

class Beverage{
    public $color;
    public $price;
    public $temperature;

 public function __construct($color, $price, $temperature="cold"){
$this->color= $color;
$this->price= $price;
$this->temperature=$temperature;
    }
    public function getInfo(){
        return "This beverage is" ." ".$this->temperature . " "."and" ." " . $this->color;
    }
}
class Beer extends Beverage{
    public $name;
    public $alcoholPercentage;
    public function __construct($name, $alcoholPercentage, $color, $price, $temperature="cold"){
        $this->name=$name;
        $this->alcoholPercentage=$alcoholPercentage;
        parent::__construct($color,$price,$temperature="cold");
    }
    public function getAlcoholpercentage(){
        return $this->alcoholPercentage;
    }
}
$Duvel = new Beer("Duvel", "8,5%","Blond", "3.5 Euro");
//$Duvel = new Beverage("Duvel", "8,5%","Blond", "3.5 Euro");

//echo $Duvel->getAlcoholpercentage();
//PHP Fatal error:  Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /home/becode/Desktop/order/oop/exercise2.php:31
//Stack trace:
echo $Duvel->getAlcoholpercentage();
echo "<br>";
echo $Duvel->alcoholPercentage="9,5%";
echo "<br>";
echo $Duvel->color;
echo "<br>";
echo $Duvel->getInfo();



?>