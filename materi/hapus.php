<?php
require('../databases/koneksi.php');

$id = $_GET['id'];

$course_id = $koneksi->query("SELECT course_id FROM material WHERE id=$id")->fetch_assoc()['course_id'];

$koneksi->query("DELETE FROM material WHERE id=$id");

header("Location: /MSIB/materials.php?course_id=$course_id");
exit();
?>
