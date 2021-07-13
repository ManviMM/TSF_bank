<?php
    $dbServername="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbDatabase="tsf";

    $conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbDatabase);
    if(!$conn){
        die("connection Failed : ". mysqli_connect_error());
    }
?>
