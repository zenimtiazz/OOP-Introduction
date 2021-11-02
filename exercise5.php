<?php
class Beverage{
    private $color;
    private $price;
    private $temperature;

 public function __construct($color, $price, $temperature="Cold"){
$this->color= $color;
$this->price= $price;
$this->temperature=$temperature;
    }
    public function getInfo(){
        return "This beverage is" ." ".$this->temperature . " "."and" ." " . $this->color;
    }
    public function temperature(){
        return $this->temperature;
    }
    public function price(){
        return $this->price =3.5;
    }
    
}
$cola = new Beverage("Black", "2 Euro");
echo $cola->temperature();
echo "<br>";
echo $cola->getInfo();

echo "<br>";
echo $cola->price();






?>