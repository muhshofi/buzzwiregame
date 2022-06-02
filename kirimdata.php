<?php
    // koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbbuzzwire");

    // baca data yang dikirimkan oleh NodeMCU
    $nilai = $_GET["nilai"];

    // update data di database
    mysqli_query($konek, "update nilai set nilai_buzz='$nilai'");

?>