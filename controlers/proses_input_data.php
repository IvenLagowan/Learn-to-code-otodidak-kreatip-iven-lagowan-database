<?php

$nama       = $_POST['nama'];
$npm        = $_POST['npm'];
$jurusan    = $_POST['jurusan'];

require_once 'index.php';
$query = mysqli_query($connect, "INSERT INTO mahasiswa VALUE('', '$nama', '', '$npm', '', '$jurusan')");

if($query){
    echo "<script>alert('Data berhasil di input'); window.location.href = '../index.php;' </script>";
}
else{
    echo "<script>alert('Data berhasil di input'); window.location.href = '../index.php;' </script>";
}



?>