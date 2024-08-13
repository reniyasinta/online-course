<?php
require('../databases/koneksi.php');

if (!isset($_GET['course_id']) || !is_numeric($_GET['course_id'])) {
    die('Error: Parameter course_id tidak ditemukan atau tidak valid');
}

$course_id = intval($_GET['course_id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $link_embed = $_POST['link_embed'];

    $stmt = $koneksi->prepare("INSERT INTO material (course_id, judul, deskripsi, link_embed) VALUES (?, ?, ?, ?)");
    $stmt->bind_param('isss', $course_id, $judul, $deskripsi, $link_embed);

    if ($stmt->execute()) {
        header("Location: /MSIB/materials.php?course_id=$course_id");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
?>
