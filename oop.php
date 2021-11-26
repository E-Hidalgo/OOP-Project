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

  // FUNCTION TO REMOVE FINS (MIN 0)

  public function removeFins()
  {

    $minFins = "You have removed all your fins";

    if ($this->finsNumber === "You have setted all your fins") {
      $this->finsNumber = 4;
    }
    if ($this->finsNumber === 0) {
      $this->finsNumber = $minFins;
    } else if ($this->finsNumber !== 0) {
      $this->finsNumber--;
    }

    return $this->finsNumber;
  }

  // FUNCTION TO ADD MORE FINS (MAX 5)
  public function addFins()
  {
    if ($this->finsNumber === "You have removed all your fins") {
      $this->finsNumber = 1;
    }

    $maxFins = "You have setted all your fins";

    if ($this->finsNumber === 5) {
      $this->finsNumber = $maxFins;
    } else if ($this->finsNumber <= 5) {

      $this->finsNumber++;
    }

    return $this->finsNumber;
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
echo $newSurfboard->removeFins();
echo "<br>";

echo $newSurfboard->removeFins();

echo "<br>";

echo $newSurfboard->removeFins();

echo "<br>";

echo $newSurfboard->addFins();

echo "<br>";

echo $newSurfboard->addFins();
echo "<br>";

echo $newSurfboard->addFins();
echo "<br>";
echo $newSurfboard->addFins();
echo "<br>";
echo $newSurfboard->addFins();
echo "<br>";