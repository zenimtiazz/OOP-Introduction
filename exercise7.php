<?php

class Beverage{
    private $color;
    private $price;
    private $temperature;
    const BARNAME = 'Het Vervolg';
    static $address = 'Melkmarkt 9, 2000 Antwerpen';


 public function __construct($color, $price, $temperature="cold"){
$this->color= $color;
$this->price= $price;
$this->temperature=$temperature;
// echo self::BARNAME;

    }
   
    public function getInfo(){
        return "This beverage is" ." ".$this->temperature . " "."and" ." " . $this->color;
    }
    public static function getAddress(){
        return self::$address;
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

echo Beverage::$address;
echo "<br>";
echo Beverage::getAddress();

/* EXERCISE 7
Copy your solution from exercise 6
Make a static property in the Beverage class that can only be accessed from inside the class called address
which has the value "Melkmarkt 9, 2000 Antwerpen".
print the address without creating a new instant of the beverage class 2 times in two different ways.
Use typehinting everywhere!
*/
?>