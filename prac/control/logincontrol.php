<?php
include '../model/testag.php';
//session_start();

if(isset($_POST['login'])){
$name=$_POST["name"];
$email=$_POST["email"];

$mydb= new mydb();
$conobj=$mydb->openCon();
$result=$mydb->login("test",$name , $email, $conobj);
if($result->num_rows > 0){
$_SESSION["name"]=$name;
header('Location: ../view/profile.php');
}
else{
    echo "cant login";
}
}
?>