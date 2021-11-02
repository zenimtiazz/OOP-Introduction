//Exercise 01
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
$cola = new Beverage("Black", "2 Euro");
echo $cola->getInfo();
echo "<br>";
echo $cola->temperature;





?>