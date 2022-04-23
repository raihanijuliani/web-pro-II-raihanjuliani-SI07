<?php
use Strawberry as GlobalStrawberry;

require_once 'class_fruit2.php';

class Strawberry extends Fruit{
    public function message()
    {
        echo "Am I a fruit or berry? ";
        
    }
}

$strawberry = new GlobalStrawberry("Strawberry","red");
$strawberry->message();
$strawberry->intro();



?>