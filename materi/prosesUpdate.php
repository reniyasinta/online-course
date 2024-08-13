<?php
require('../databases/koneksi.php');
$id = intval($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $link_embed = $_POST['link_embed'];

    $stmt = $koneksi->prepare("UPDATE material SET judul = ?, deskripsi = ?, link_embed = ? WHERE id = ?");
    if ($stmt === false) {
        die('Error: ' . $koneksi->error);
    }
    $stmt->bind_param('sssi', $judul, $deskripsi, $link_embed, $id);

    if ($stmt->execute()) {
        $stmt = $koneksi->prepare("SELECT course_id FROM material WHERE id = ?");
        if ($stmt === false) {
            die('Error: ' . $koneksi->error);
        }
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result) {
            $course_id = $result->fetch_assoc()['course_id'];
            echo "<script>
                alert('Material Succesfully Updated');
                window.location.href = '/MSIB/materials.php?course_id=$course_id';
            </script>";
            exit();
        } else {
            echo "<script>
                alert('Error: Can not found course_id');
                window.location.href = '/MSIB/materials.php';
            </script>";
        }
    } else {
        echo "<script>
            alert('Error: " . $stmt->error . "');
            window.location.href = '/MSIB/materials.php';
        </script>";
    }

    $stmt->close();
} else {
    $stmt = $koneksi->prepare("SELECT * FROM material WHERE id = ?");
    if ($stmt === false) {
        die('Error: ' . $koneksi->error);
    }
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result) {
        $materi = $result->fetch_assoc();
    } else {
        die('Error: ' . $koneksi->error);
    }

    $stmt->close();
}
?>