<?php

class mydb{

    function openCon(){
        $dbhost="localhost";
        $dbusername="root";
        $dbpassword="";
        $dbname="testdb";
        $connobject=new mysqli($dbhost, $dbusername, $dbpassword,$dbname);
        return $connobject;    
        }
        function addAdmin($table,$name,
        $email,$connobject ){
            $sql="INSERT INTO $table (
            name,email) 
            VALUES 
            ('$name','$email')";
           return $connobject->query($sql);
           
            }
            function login($table, $name, $email, $connobject){
                $sql="SELECT name, email FROM $table
                WHERE name='$name' AND email='$email'";
                $result=$connobject->query($sql);
                return $result;
            }
}

?>
