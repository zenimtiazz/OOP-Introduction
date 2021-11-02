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


/* EXERCISE 3
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties private.
Make all the other prints work without error.
After fixing the errors. Change the color of Duvel to light instead of blond and
also print this new color on the screen after all the other things that were already printed (to be sure that the color has changed).
Create a new private method in the Beer class called beerInfo which returns "Hi i'm Duvel and have an alochol percentage of 8.5 and I have a light color."
Make sure that you use the variables and not just this text line.
Print this method on the screen on a new line.
USE TYPEHINTING EVERYWHERE!
*/

?>