<?php 
    include "koneksi.php";

    $sql = "CREATE TABLE publisher(
        id_publisher int PRIMARY KEY,
        judul_game varchar(50),
        publisher varchar(50),
        developer varchar(50),
        store varchar(50)
    )";

    $sql = "CREATE TABLE game(
            id_game int PRIMARY KEY,
            judul_game varchar(50),
            publisher varchar(50),
            developer varchar(50),
            store varchar(50),
            sinopsis LONGTEXT,
            FOREIGN KEY publisher references publisher(publisher),
            FOREIGN KEY developer references developer(developer)
        )";

    if($koneksi->query($sql) === TRUE){
        echo "Tabel dibuat";
    } else {
        echo "Gagal dibuat";
    }
?>