<?php
require('../databases/koneksi.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $durasi = $_POST['durasi'];

    $koneksi->query("INSERT INTO courses (judul, deskripsi, durasi) VALUES ('$judul', '$deskripsi', $durasi)");

    header('Location: /MSIB/courses.php');
    exit();
}

$title = "Add Course";

?>