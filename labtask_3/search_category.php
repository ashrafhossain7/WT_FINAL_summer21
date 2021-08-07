<?php

require_once 'controllers/CategoryController.php';

$key = $_GET["key"];
$categories = searchCategory($key);

if(count($categories)>0){

    foreach($categories as $c){

        echo"<p>".$c["name"]."</p>";
    }
}

?>