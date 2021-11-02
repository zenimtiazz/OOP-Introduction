<?php

class Beverage{
    public $color;
    private $price;
    private $temperature;

 public function __construct($color, $price, $temperature="cold"){
$this->color= $color;
$this->price= $price;
$this->temperature=$temperature;
    }
    // public function getInfo(){
    //     return "This beverage is" ." ".$this->temperature . " "."and" ." " . $this->color;
    // }
    public function __set($name,$value){
        $this->name = $value;
    }

    public function __get($name){
        return $this->$name;
    }
}
class Beer extends Beverage{
    private $name;
    private $alcoholPercentage;
    public function __construct($name, $alcoholPercentage, $color, $price, $temperature="cold"){
        $this->name= $name;
        $this->alcoholPercentage= $alcoholPercentage;
      
        parent::__construct($color,$price,$temperature="cold");
    }
    public function __set($name,$value){
        $this->name = $value;
    }

    public function __get($name){
        return $this->$name;
       
    }
    private function beerInfo(){
        return "Hi i'm ". $this->name ." and have an alochol percentage of"." ". $this->alcoholPercentage." and I have an ".$this->color ." "."color.";
    }
public function save(){
    return $this->beerInfo();
}
    // public function getAlcoholpercentage(){
    //     return $this->alcoholPercentage;
    // }
}
$Duvel = new Beer("Duvel", "8,5%","Blond", "3.5 Euro");

// echo $Duvel->alcoholPercentage="9,5%";
echo "<br>";
echo $Duvel->color = "light";
echo "<br>";


echo $Duvel->save();


?>