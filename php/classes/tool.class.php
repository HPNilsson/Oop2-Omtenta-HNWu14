<?php

class Tool extends Base {
  public $name;
  public $statType;
  public $statValue;

  public function __construct($name,$statType,$statValue){
    $this->name = $name;
    $this->statType = $statType;
    $this->statValue = $statValue;
  }
}

