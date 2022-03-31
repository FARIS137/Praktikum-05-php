<?php
require_once 'class_fruit.php';

class strawberry extends buah {
    public function message(){
        echo "Am i a fruit or a berry?";
    }
}
$strawberry = new strawberry("strawberry", "red");
$strawberry->message();
$strawberry->intro();


?>