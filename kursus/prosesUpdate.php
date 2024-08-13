<?php
require('../databases/koneksi.php');

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $durasi = $_POST['durasi'];

    $query = "UPDATE courses SET judul='$judul', deskripsi='$deskripsi', durasi=$durasi WHERE id=$id";
    if ($koneksi->query($query) === TRUE) {
        echo "<script>
            alert('Course Succesfully Updated');
            window.location.href = '/MSIB/courses.php';
        </script>";
    } else {
        echo "<script>
            alert('Course Failed to Update: " . mysqli_error($koneksi) . "');
            window.location.href = '/MSIB/courses.php';
        </script>";
    }
    exit();
} else {
    $result = $koneksi->query("SELECT * FROM courses WHERE id=$id");
    if ($result->num_rows > 0) {
        $kursus = $result->fetch_assoc();
    } else {
        echo "<script>
            alert('Course Not Found.');
            window.location.href = '/MSIB/courses.php';
        </script>";
        exit();
    }
}

$title = "Edit Course";
?>
