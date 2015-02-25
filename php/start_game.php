<?php 



include_once('nodebite-swiss-army-oop.php');


	$ds = new DBObjectSaver(array(
		  "host" => "127.0.0.1",
		  "dbname" => "wu14oop2",
		  "username" => "root",
		  "password" => "mysql",
		  "prefix" => "hn_jultenta"
		));




	unset($players);
	unset($challenge);
	unset($currentchallenge);
	unset($tools);



$testChallenge = new Challenge("testChallenge", "strength");

$testCharacter = new Character("Mortimer");

$testTool = new Tool("Tool", "Tooling");

