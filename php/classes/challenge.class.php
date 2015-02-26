<?php

class Challenge extends Base {


  protected $description;
  protected $skill;
  protected $skillValue;


 public function __construct($description,$skill,$skillValue){
  $this->description = $description;
  $this->skill = $skill;
  $this->skillValue = $skillValue
 }

	

}