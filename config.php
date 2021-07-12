<?php
    $dbServername="localhost";
    $dbUsername="id17223940_admin";
    $dbPassword="Manvi123@tsfintern";
    $dbDatabase="id17223940_tsfbank";

    $conn= mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbDatabase);
    if(!$conn){
        die("connection Failed : ". mysqli_connect_error());
    }
?>