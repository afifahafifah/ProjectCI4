<?php namespace App\Controllers;

class Helloworld extends BaseController {

	public function index($name, $npm)
	{
		echo $name ."<br>";
		echo $npm ."<br>";
	}
	public function show()
	{
		echo "Wellcome to Afifah's store! <br/>";
		echo " Menjual berbagai jenis dan brand makanan kucing";
	}
}