<?php
    //koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbbuzzwire");

    // Baca isi tabel nilai
    $sql = mysqli_query($konek, "select * from nilai");
    $data = mysqli_fetch_array($sql);
    $nilai = $data["nilai_buzz"];

    echo $nilai;
?>