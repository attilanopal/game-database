<?php
$server = 'localhost'; 
$username = 'root';    
$password = '';
$database = 'gametab';
$connect = mysqli_connect($server,$username,$password,$database);

if (!$connect){
    echo "<div class='alert alert-danger' role='alert'>
            Web tidak tersambung dengan Database!
        </div>";
}

?>