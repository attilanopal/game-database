<?php 
    include "koneksi.php";

    $sql = "CREATE TABLE store(
        id_developer int PRIMARY KEY,
        nama_developer varchar(50),
        founder varchar(50),
        tanggal varchar(50),
        sinopsis varchar(50)
    )";

    if($koneksi->query($sql) === TRUE){
        echo "Tabel dibuat";
    } else {
        echo "Gagal dibuat";
    }

    $sql = "CREATE TABLE developer(
        id_developer int PRIMARY KEY,
        nama_developer varchar(50),
        founder varchar(50),
        tanggal varchar(50),
        sinopsis varchar(50)
    )";

    if($koneksi->query($sql) === TRUE){
        echo "Tabel dibuat";
    } else {
        echo "Gagal dibuat";
    }

    $sql = "CREATE TABLE publisher(
        id_publisher int PRIMARY KEY,
        nama_publisher varchar(50),
        founder varchar(50),
        tanggal varchar(50),
        sinopsis varchar(50)
    )";

    if($koneksi->query($sql) === TRUE){
        echo "Tabel dibuat";
    } else {
        echo "Gagal dibuat";
    }

    $sql = "CREATE TABLE game(
            id_game int PRIMARY KEY AUTO_INCREMENT,
            judul_game varchar(50),
            kategori varchar(50),
            publisher varchar(50),
            developer varchar(50),
            store varchar(50),
            tgl_rilis date,
            platform varchar(50),
            rating tinyint(2),
            sinopsis TEXT
            )";

    if($koneksi->query($sql) === TRUE){
        echo "Tabel dibuat";
    } else {
        echo "Gagal dibuat";
    }
?>