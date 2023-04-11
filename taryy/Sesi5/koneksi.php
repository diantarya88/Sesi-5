<?php
    include("konfigurasi.php");
    
    $hasil = mysqli_connect(DBHOST, DBUSER, DBPASS);

    if($hasil){
        echo "Koneksi ke Mysql Sukses";
    }else{
        echo "Koneksi ke Mysql Gagal";
    }