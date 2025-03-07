<?php
require_once "includes/dbconnect.php";
$title = $_POST['txtTitle'];
$content = $_POST['txtContent'];

#echo "{$title} - {$content}";
try {
    $sql="INSERT INTO aboutus(atitle,acontent)VALUES(?,?)";
    $data = array($title,$content);
    $stmt=$con->prepare($sql);
    $stms->execute($data);
    header("location:aboutus.php");
} catch (PDOException $th) {
    echo $th->getMessage();
}

?>