<?php
    include "koneksi.php";

    $sql = "CREATE TABLE user(
        id int PRIMARY KEY,
        nama varchar(50),
        role varchar(50),
        available varchar(50),
        age int,
        lokasi varchar(50),
        ye varchar(50),
        email varchar(50)
        )";

        if($koneksi->query($sql) == TRUE){
            echo "tabel Berhasil Dibuat";
        }else{
            echo "tabel Gagal Dibuat";
        }


?>