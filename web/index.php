<?php

class Room
{
	public $color = 'red';
	public function getColor()
	{
		echo $this->color;
	}

}
$object= new Room();

$object->getColor();
?>