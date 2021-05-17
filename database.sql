CREATE DATABASE dbGame;
CREATE TABLE publisher (
    id_publisher int(4) AUTO_INCREMENT PRIMARY KEY,
    nama_publisher varchar(50) not null,
    jumlah_game int(8) not null,
    penemu varchar(20) not null,
    tanggal_ditemukan date not null
);
CREATE TABLE platform_store (
    id_platform_store int(4) AUTO_INCREMENT PRIMARY KEY,
    nama_store varchar(50) not null,
    pengembang varchar(30) not null,
    platform_media varchar(30) not null,
    tanggal_rilis date not null
);
CREATE TABLE pengembang (
    id_pengembang int(4) AUTO_INCREMENT PRIMARY KEY,
    nama_pengembang varchar(30) not null,
    jumlah_game int(8) not null,
    penemu varchar(30) not null,
    jumlah_pekerja int(8) not null,
    tanggal_ditemukan date not null
);
CREATE TABLE game (
    id_game int(4) AUTO_INCREMENT PRIMARY KEY,
    judul varchar(50) not null,
    kategori varchar(30) not null,
    tanggal_rilis date not null,
    media_main varchar(30) not null,
    rating int(10) not null,
    standar_minimum varchar(50) not null,
    standar_rekomendasi varchar(50) not null
);
ALTER TABLE game ADD FOREIGN KEY (id_pengembang) REFERENCES pengembang(id_pengembang);
ALTER TABLE game ADD FOREIGN KEY (id_publisher) REFERENCES publisher(id_publisher);
ALTER TABLE game ADD FOREIGN KEY (id_platform_store) REFERENCES platform_store(id_platform_store);
