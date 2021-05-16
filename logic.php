<?php
$server = "localhost"; 
$username = "root";    
$password = "";
$database = "dbGame";
$connect = mysqli_connect($server,$username,$database);

if (!$connect){
    echo "<div class='alert alert-danger' role='alert'>
            Web tidak tersambung dengan Database!
        </div>";
}

?>