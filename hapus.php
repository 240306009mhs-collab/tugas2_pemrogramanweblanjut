<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tabledata WHERE id='$id'");

header("location:tampilan.php");
