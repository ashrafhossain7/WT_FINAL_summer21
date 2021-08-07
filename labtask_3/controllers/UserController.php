<?php

        include 'models/db_config.php';

        $name="";
        $err_name="";
        $username="";
        $err_username="";
        $email="";
        $err_email="";
        $password="";
        $err_password="";
        $err_db="";

        $hasError = false;


        if(isset($_POST["sign_up"])){



            if(empty($_POST["name"])){
                $hasError = true;
                $err_name ="Name  Required";
            }
            else{
                $name = htmlspecialchars($_POST["name"]);
            }
            if(empty($_POST["username"])){
                $hasError = true;
                $err_username ="Username  Required";
            }
            else{
                $username = htmlspecialchars($_POST["username"]);
            }
            if(empty($_POST["email"])){
                $hasError = true;
                $err_email ="Email  Required";
            }
            else{
                $email = htmlspecialchars($_POST["email"]);
            }
            if(empty($_POST["password"])){
                $hasError = true;
                $err_password ="Password  Required";
            }
            else{

                $password = htmlspecialchars($_POST["password"]);
            
            }




            if(!$hasError){

                $rs = insertUser($name,$username,$email,$password);
        
                if($rs === true){
                    header("Location: Login.php");
                }
                $err_db = $rs;
                }
                
        }else if (isset($_POST["btn_login"])){




            if(empty($_POST["username"])){
                $hasError = true;
                $err_username ="Username  Required";
            }
            else{
                $username = htmlspecialchars($_POST["username"]);
            }
            if(empty($_POST["password"])){
                $hasError = true;
                $err_password ="Password  Required";
            }
            else{

                $password = htmlspecialchars($_POST["password"]);
            
            }




            if(!$hasError){

                if(authenticateUser($username,$password)){

                    header("Location: Add_category.php");
                }
                $err_db = "Username password invalid";



                }


        }








        function insertUser($name,$username,$email,$password){

            $query = "insert into users values(NULL,'$name','$username','$email','$password')";
            return execute($query);

        }


        function authenticateUser($username,$password){
            $query = "select * from users where username='$username' and password = '$password'";
            $rs = get($query);
            if(count($rs) > 0){
                return true;
            }
            return false;



        }


?>