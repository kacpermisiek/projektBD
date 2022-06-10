<?php

function OpenCon(){
    $conn = new mysqli("localhost", "root", "","spedycja") or
                die("Connect failed: %s\n". $conn-> error);

    return $conn;
}

function CloseCon($conn){
    $conn -> close();
}
?>