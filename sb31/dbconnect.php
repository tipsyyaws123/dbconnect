<?php
$host="localhost";
$dbase="dbmayao";
$username="root";
$password="";
$dsn="mysql:host={$host};dbname={$dbase}";
try {
    $can=new PDO($dsn,$username,$password);
    if($can){
        echo "Connection Successful";
    }
}  catch (PDOException $th) {
    echo "Error : ".$th->getMessage();
}

?>