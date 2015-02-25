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
	unset($challenges);
	unset($currentchallenge);
	unset($tools);



$nylarthotep = new Challenge("Nylarthotep");
 
