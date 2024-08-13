<?php
require('C:/xampp reni/htdocs/MSIB/databases/koneksi.php');

if (!isset($_GET['course_id']) || !is_numeric($_GET['course_id'])) {
    die('Error: Parameter course_id tidak ditemukan atau tidak valid');
}

$course_id = intval($_GET['course_id']);

$query = "SELECT * FROM material WHERE course_id = ?";
$stmt = $koneksi->prepare($query);

if ($stmt === false) {
    die('Error: ' . $koneksi->error);
}

$stmt->bind_param('i', $course_id);

if ($stmt->execute()) {
    $result = $stmt->get_result();
} else {
    die('Error: ' . $stmt->error);
}
require('/xampp reni/htdocs/MSIB/layouts/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materials List</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center mb-4">Material List for Course ID: <?= htmlspecialchars($course_id); ?></h1>
    
    <a href="/MSIB/materi/tambah.php?course_id=<?= htmlspecialchars($course_id); ?>" class="btn btn-add mb-4">Add Material</a>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead class="table-dark text-center">
                <tr>
                    <th>Theme</th>
                    <th>Description</th>
                    <th>Link</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= htmlspecialchars($row['judul']); ?></td>
                        <td><?= htmlspecialchars($row['deskripsi']); ?></td>
                        <td>
                            <a href="<?= htmlspecialchars($row['link_embed']); ?>" target="_blank"><?= htmlspecialchars($row['link_embed']); ?></a>
                        </td>
                        <td class="text-center">
                            <a href="/MSIB/materi/edit.php?id=<?= htmlspecialchars($row['id']); ?>" class="btn btn-edit btn-sm">Edit</a>
                            <a href="/MSIB/materi/hapus.php?id=<?= htmlspecialchars($row['id']); ?>" class="btn btn-delete btn-sm" onclick="return confirm('Warning: Deleting this material will permanently remove it. Continue?')">Delete</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
$koneksi->close();
require('/xampp reni/htdocs/MSIB/layouts/footer.php');
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
