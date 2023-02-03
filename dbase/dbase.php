<?php

    $dbhost="localhost";
    $dbuser="root";
    $dbpass="";
    $db="dop";
    $un="GA125A";

try{
    $bdd=new PDO("mysql:host=localhost;dbname=dop",'root','');
} catch(Exception $e) {
    exit("Unable to connect to database.myiii mysql_error()");
}


?>