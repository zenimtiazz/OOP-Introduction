<?php

class Beverage{
    private $color;
    private $price;
    private $temperature;
    const BARNAME = 'Het Vervolg';

 public function __construct($color, $price, $temperature="cold"){
$this->color= $color;
$this->price= $price;
$this->temperature=$temperature;
// echo self::BARNAME;

    }
   
    public function getInfo(){
        return "This beverage is" ." ".$this->temperature . " "."and" ." " . $this->color;
    }
}
class Beer extends Beverage{
    private $name;
    private $alcoholPercentage;
    
    public function __construct($name, $alcoholPercentage, $color, $price, $temperature="cold"){
        $this->name=$name;
        $this->alcoholPercentage=$alcoholPercentage;
        parent::__construct($color,$price,$temperature="cold");
    //    echo parent::BARNAME;
    }
    public function __get($name){
        return $this->name;
    }
    public function __set($name,$value){
        return $this->name=$value;
    }
}
$Duvel = new Beer("Duvel", "8,5%","Blond", "3.5 Euro");
echo Beverage::BARNAME;

echo "<br>";
echo $Duvel->alcoholPercentage=8.5;
echo "<br>";
echo $Duvel->color="blonde";
echo "<br>";
echo $Duvel->getInfo();

/* EXERCISE 6
Copy the classes of exercise 2.
change the properties to private.
Make a const barname with the value 'Het Vervolg'.
print the constant on the screen
create a function in beverage and use the constant.
Do the same in the beer class
print the output of these functions on the screen.
Make sure that every print is on a new line.
Use typehinting everywhere!
*/


?>