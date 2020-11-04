<?php
    include "koneksi.php";

    if(isset($_POST['submit'])){
        $id_user    =$_POST["id_user"];
        $nama       =$_POST['nama'];
        $role       =$_POST["role"];
        $available  =$_POST["available"];
        $age        =$_POST["age"];
        $lokasi     =$_POST["lokasi"];
        $ye         =$_POST["ye"];
        $email      =$_POST["email"];

        $sql = "UPDATE user set nama = '$nama', role='$role', available='$available', age='$age', lokasi='$lokasi', ye='$ye', email='$email' WHERE id_user='$id_user'";

       
    }
?>