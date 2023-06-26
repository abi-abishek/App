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