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


/* EXERCISE 2
Make class beer that extends from Beverage.
Create the properties name (string) and alcoholpercentage (float).
Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
Remember for now we will use properties and methods that can be accessed from everywhere.
Make a getAlcoholpercentage function which returns the alocoholpercentage.
Instantiate an object which represents Duvel. Make sure that the color is set to blond, the price equals 3.5 euro and the temperature to cold automatically.
Also the name equal to Duvel and the alcohol percentage to 8,5%
print the getAlcoholpercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
Make sure that each print is on a different line.
Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholpercentage() in /var/www/becode/workshop/exercise2.php on line 64
USE TYPEHINTING EVERYWHERE!
*/


?>