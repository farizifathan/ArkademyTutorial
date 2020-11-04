<?php
    include "koneksi.php";

    $sql = "CREATE DATABASE profile";

    if($koneksi->query($sql) === TRUE){
        echo "Database Berhasil Dibuat";

    }else{
        echo "Database Gagal Dibuat";
    }
?>