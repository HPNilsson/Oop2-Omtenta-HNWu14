<?php 



include_once('nodebite-swiss-army-oop.php');


	$ds = new DBObjectSaver(array(
		  "host" => "127.0.0.1",
		  "dbname" => "wu14oop2",
		  "username" => "root",
		  "password" => "mysql",
		  "prefix" => "hn_jultenta"
		));




	unset($ds->players);
	unset($ds->challenge);
	unset($ds->currentchallenge);
	unset($ds->tools);



$testChallenge = new Challenge("testChallenge", "strength");


$Mortimer = new Thief ("Mortimer");
$Pierro = new Acrobat ("Pierro");
$Oggnogg = new Warrior ("Oggnogg");
$Claire = new Cleric ("Claire");


	$ds->players[] = New $player_class($player_name, $ds);

//then make random bots (can also be done with a while loop)
	$available_classes = array("Thief", "Acrobat", "Warrior" "Cleric");
	for ($i=0; $i < count($available_classes); $i++) { 
	  if ($available_classes[$i] != $player_class) {
	    $ds->players[] = new $available_classes[$i]("Bot".$i, $ds);
	  }
	}


$tools = array(
	array(
		"name" => "Tool1",
		"statType" => array(
			"statValue" => 10
		),
	),
	array(
		"name" => "Tool2",
		"statType" => array(
			"statValue" => 10
		),
	),
	array(
		"name" => "Tool3",
		"statType" => array(
			"statValue" => 10
			),
		),
	array(
		"name" => "Tool4",
		"statType" => array(
			"statValue" => 10
			),
		),
	array(
		"name" => "Tool5",
		"statType" => array(
			"statValue" => 10
			),
		),
	array(
		"name" => "Tool6",
		"statType" => array(
			"statValue" => 10
			),
		),
	array(
		"name" => "Tool7",
		"statType" => array(
			"statValue" => 10
			),
		),
	array(
		"name" => "Tool8",
		"statType" => array(
			"statValue" => 10
			),
		),
	array(
		"name" => "Tool9",
		"statType" => array(
			"statValue" => 10
			),
		),
);

$challenge = array(
	array(
		"description" => "Challenge1",
		"skill" => array(
			"skillValue" => 10
		),
	),
	array(
		"description" => "Challenge2",
		"skill" => array(
			"skillValue" => 10
		),
	),
	array(
		"description" => "Challenge3",
		"skill" => array(
			"skillValue" => 10
			),
		),
	array(
		"description" => "Challenge4",
		"skill" => array(
			"skillValue" => 10
			),
		),
	array(
		"description" => "Challenge5",
		"skill" => array(
			"skillValue" => 10
			),
		),
	array(
		"description" => "Challenge6",
		"skill" => array(
			"skillValue" => 10
			),
		),
	array(
		"description" => "Challenge7",
		"skill" => array(
			"skillValue" => 10
			),
		),
	array(
		"description" => "Challenge8",
		"skill" => array(
			"skillValue" => 10
			),
		),
	array(
		"description" => "Challenge9",
		"skill" => array(
			"skillValue" => 10
			),
		),
	array(
		"description" => "Challenge10",
		"skill" => array(
			"skillValue" => 10
			),
		),
);