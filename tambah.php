<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];

mysqli_query($conn, "INSERT INTO tabledata VALUES('', '$nama', '$nim', '$jurusan')");

header("location:tampilan.php");
