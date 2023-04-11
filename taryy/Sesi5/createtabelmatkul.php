<?php
    include("konfigurasi.php");
    
    $cnn = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);

    if($cnn){
        $tbel = "tbMATKUL"; 
        $sql = "CREATE TABLE $tbel(
            kode_mk VARCHAR(8) PRIMARY KEY,
            matakuliah VARCHAR(35),
            sks INT
        )";
        $hasil = mysqli_query($cnn, $sql);
        if($hasil){
            echo "Pembuatan Tabel " . $tbel . "Sukses";
        }else{
            echo "Pembuatan Tabel " . $tbel . "Gagal";
        }

    }else{
        echo "Koneksi ke Mysql Gagal";
    }