<?php
    // This is a database connection file
    
    $hostname = "localhost";
    $username = "packetpz_XXXXX";
    $password ="packetpz_XXXXX";
    $dbname = "packetpz_XXXXX";

    $conn = mysqli_connect($hostname,$username,$password,$dbname);
        
    if(!$conn){
        var_dump(mysqli_connect_error());
    }

?>