<?php
    include "koneksi.php";

    $sql = "SELECT * FROM user";
    $result = $koneksi->query($sql);
    
    foreach ($result as $result) {
        $id = $result['id'];
        $nama= $result['nama'];
        $role= $result['role'];
        $available= $result['available'];
        $age=$result['age'];
        $lokasi= $result['lokasi'];
        $ye =$result['ye'];
        $email  =$result['email'];

        
    }
?>