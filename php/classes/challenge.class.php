<?php

class Challenge extends Base {


  public $description;
  public $skill;
  public $skillValue;


 public function __construct($description,$skill,$skillValue){
  $this->description = $description;
  $this->skill = $skill;
  $this->skillValue = $skillValue;
 }

	

}