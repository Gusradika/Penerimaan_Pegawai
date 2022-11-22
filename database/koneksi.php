<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$koneksi = mysqli_connect("localhost", "root", "", "rekrutmen");

//cek koneksi

if (mysqli_connect_errno()) {
    echo "koneksi database gagal :" . mysqli_connect_error();
}