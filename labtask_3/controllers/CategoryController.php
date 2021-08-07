<?php

include 'models/db_config.php';

$name="";
$err_name="";
$err_db="";


$hasError = false;


if(isset($_POST["add_category"])){



    if(empty($_POST["name"])){
        $hasError = true;
        $err_name ="Name  Required";
    }
    else{
        $name = htmlspecialchars($_POST["name"]);
    }


    
    if(!$hasError){

        $rs = insertCategory($name);

        if($rs === true){
            header("Location: All_categories.php");
        }
        $err_db = $rs;
        }



} 
elseif(isset($_POST["edit_category"])){
    


    if(empty($_POST["name"])){
        $hasError = true;
        $err_name ="Name  Required";
    }
    else{
        $name = htmlspecialchars($_POST["name"]);
    }


    if(!$hasError){
    $rs= editCategory($name, $_POST["id"]);
    if($rs === true){

        header("Location:All_categories.php");
    }
    $err_db = $rs;
    }



}




function insertCategory($name){

    $query = "insert into categories values(NULL,'$name')";
    return execute($query);

}


function getAllCategories(){

    $query = "select * from categories";
    $rs = get($query);
    return $rs;

}



function getCategory($id){
    $query = "select * from categories where id=$id";
    $rs = get($query);
    return $rs[0];
}


function editCategory($name, $id){

    $query = "update categories set name='$name' where id=$id";
    return execute($query);



}



function searchCategory($key){
    $query = "select id,name from categories where name like '%$key%'";

    $rs = get($query);
    return $rs;
}




?>