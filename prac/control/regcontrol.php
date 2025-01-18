<?php
include '../model/testag.php';
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $hasError=0;
    $name=$_REQUEST["name"];
    $email=$_REQUEST["email"];

    if (empty($name))
    {echo "Enter first name<br>";
    $hasError++;
}
else {
    echo "Name:".$name."<br>";
}

if (empty($email))
    {echo "Enter email<br>";
    $hasError++;
}
else {
    echo $email."<br";
}
if($hasError>0){
    echo "enter valid data<br>";
}
else{
    $mydb=new mydb();
    $conobj=$mydb->openCon();
    $result=$mydb->addAdmin("test",$name,
    $email,$conobj);}


}



?>