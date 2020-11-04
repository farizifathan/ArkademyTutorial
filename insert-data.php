<?php
    include "koneksi.php";

    $sql = "INSERT INTO `user` (`id`, `nama`, `role`, `available`, `age`, `lokasi`, `ye`, `email`) VALUES 
    ('5', 'Georger', 'Fullstack Developer', 'Full Time', '20', 'Medan', '2', 'farizifathan27@gmail.com')";


     if($koneksi->query($sql) == TRUE){
            echo "Data Berhasil dimasukan";
        }else{
            echo "Data gagal";
        }

?>