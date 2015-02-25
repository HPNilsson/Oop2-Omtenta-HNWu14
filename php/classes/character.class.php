<?php
	
	class Character extends Base {
 // Thief, Cleric, Warrior, Acrobat
	public $name;
	public $agility;
	public $luck;
	public $strength;
	public $cunning;
	public $success;

	protected $tools = array();

	public function __construct($name){
		$this->name= $name;

	}

}
//$this kallar man bara på i klasserna. 

