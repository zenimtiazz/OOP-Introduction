<?php


class Beverage{
    protected $color;
    protected $price;
    protected $temperature;

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
    protected $name;
    protected $alcoholPercentage;
    public function __construct($name, $alcoholPercentage, $color, $price, $temperature="cold"){
        $this->name=$name;
        $this->alcoholPercentage=$alcoholPercentage;
        parent::__construct($color,$price,$temperature="cold");
    }
 
    public function __get($name){
        return $this->$name;
    }
}
$Duvel = new Beer("Duvel", "8,5%","Blond", "3.5 Euro");

echo $Duvel->alcoholPercentage=9;
echo "<br>";
echo $Duvel->color;
echo "<br>";
echo $Duvel->getInfo();



/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/



?>