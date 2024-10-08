<?php

include_once "connection.php";

$newsut_AdminID = $_POST["AdminID"];
$newsut_username = $_POST["username"];
$newsut_passwords = $_POST["passwords"];
$newsut_name = $_POST["name"];
$newsut_surname = $_POST["surname"];
$newsut_status = $_POST["status"];


if(isset($_POST["AdminID"]) && isset($_POST["username"])
&& isset($_POST["passwords"]) && isset($_POST["name"])
&&  isset($_POST["surname"]) && isset($_POST["status"])){
    $q = mysqli_query($db_con, "INSERT INTO admin (AdminID,username,passwords,name,surname,status) 
    VALUES ('".$newsut_AdminID."','".$newsut_username."','".$newsut_passwords."','".$newsut_name."','".$newsut_surname."','".$newsut_status."')");

    echo mysqli_error($db_con);
    
    header("location: sign_in.php"); 
}else{
    header("location: yonetici_sign_up.php");
}


?>

