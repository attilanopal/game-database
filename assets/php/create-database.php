<?php 
    include "koneksi.php";

    $sql = "CREATE DATABASE gametab";

    if($koneksi->query($sql) === TRUE){
        echo "Database dibuat";
    } else {
        echo "Gagal dibuat";
    }
?>