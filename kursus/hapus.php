<?php
require('../databases/koneksi.php');

$id = $_GET['id'];

$koneksi->query("DELETE FROM courses WHERE id=$id");

if ($koneksi->query($sql) === TRUE) {
    echo "<script> alert('Pesanan Berhasil Dihapus!');
    document.location.href = '/MSIB/courses.php';
    </script>";
}
header('Location: /MSIB/courses.php');
exit();
?>

