<?php

# BASE CLASS

class Surfboard
{
  #
  # PROPERTIES
  public $brand;
  public $modelName;
  public $size;
  public $width;
  public $thickness;
  public $volume;
  public $tailType;
  public $finsSystem;
  public $finsNumber;

  # METHODS
  public function getBrand()
  {
    return $this->brand;
  }

  public function removeFins()
  {
    if ($this->finsNumber === 0) {
      return $this->finsNumber = "The number of fins is " . 0 . ". You have removed all the fins";
    }
    return $this->finsNumber--;
  }

  public function addFins()
  {

    if ($this->finsNumber === 5) {
      return $this->finsNumber = "The number of fins is " . 5 . ". You have setted all the fins";
    }
    return $this->finsNumber++;
  }

  public function getVolume()
  {
    return $this->volume;
  }

  # CONSTRUCTOR
  public function __construct(string $brand, string $modelName, string $volume)
  {
    $this->brand = $brand;
    $this->modelName = $modelName;
    $this->volume = $volume;
  }

  # DESTRUCTOR


}

$newSurfboard = new Surfboard("Pyzel", "Ghost", "24,7L");

// $newSurfboard->brand = "Pyzel";
// $newSurfboard->modelName = "Ghost";
$newSurfboard->size = "5' 8''";
$newSurfboard->width = "18 3/4";
$newSurfboard->thickness = "2 5/1";
// $newSurfboard->volume = "24.7L";
$newSurfboard->tailType = "Round Pin";
$newSurfboard->finsSystem = "Futures";
$newSurfboard->finsNumber = 3;


echo "<pre>";

var_dump($newSurfboard);

echo "<br>";

echo $newSurfboard->getVolume();

echo "<br>";

echo $newSurfboard->removeFins();

echo "<br>";

echo $newSurfboard->finsNumber;

echo "<br>";

echo $newSurfboard->addFins();
echo $newSurfboard->addFins();
echo $newSurfboard->addFins();
echo $newSurfboard->addFins();