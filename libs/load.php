<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php";
}

function validate_credentials($username, $password){
    if($username == "sudhaya520@gmail.com" and $password == "520"){
        return true;
    } else {
        return false;
    }
}

function signup($username, $password , $email , $phone)
{
    $servername = "mysql.selfmade.ninja";
    $username = "abishek";
    $password = "Abi12345";
    $dbname = "abishek_db";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }else{
        print("Connection Success");
    }

     $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
     VALUES ('admin', 'admin', 'admin@gmail.com', '8428420769', '0', '1');";
     $result=false;
     if ($conn->query($sql) === true) {
       $result=true;
     } else {
       $result=false;
     }
    
     $conn->close();
     return $result;
    
}