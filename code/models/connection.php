<?php
class connection{
	public static function conex(){
		$link = new PDO("mysql:host=localhost;dbname=loginp","root","");
		return $link;
	}
}