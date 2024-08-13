<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Courses</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php
    require('databases/koneksi.php');
    $result = $koneksi->query("SELECT * FROM courses");
    require('C:/xampp reni/htdocs/MSIB/layouts/header.php');
    ?>

    <div class="container mt-5">
        <h1 class="text-center mb-">All Courses</h1>
        
        <a href="/MSIB/kursus/tambah.php" class="btn btn-add mb-4">Add New Course</a>
        
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead class="table-dark text-center">
                    <tr>
                        <th>Id</th>
                        <th>Theme</th>
                        <th>Description</th>
                        <th>Duration (hours)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td class="text-center"><?= $row['id']; ?></td>
                            <td><?= $row['judul']; ?></td>
                            <td><?= $row['deskripsi']; ?></td>
                            <td class="text-center"><?= $row['durasi']; ?></td>
                            <td class="text-center">
                                <a href="/MSIB/kursus/edit.php?id=<?= $row['id']; ?>" class="btn btn-edit btn-sm">Edit</a>
                                <a href="/MSIB/kursus/hapus.php?id=<?= $row['id']; ?>" class="btn btn-delete btn-sm" onclick="return confirm('Warning: Deleting this course will permanently remove it. Continue?')">Delete</a>
                                <a href="materials.php?course_id=<?= $row['id']; ?>" class="btn btn-materials btn-sm">Materials</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php
    $koneksi->close();
    require('C:/xampp reni/htdocs/MSIB/layouts/footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
