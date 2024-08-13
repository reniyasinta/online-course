<?php
require('prosesUpdate.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 class="mb-4">Edit Course</h1>
                <form method="POST">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Theme:</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo htmlspecialchars($kursus['judul']); ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Description:</label>
                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required><?php echo htmlspecialchars($kursus['deskripsi']); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="durasi" class="form-label">Duration (/hour):</label>
                        <input type="number" class="form-control" id="durasi" name="durasi" value="<?php echo htmlspecialchars($kursus['durasi']); ?>" required>
                    </div>
                    <button type="submit" class="btn btn-add">Update</button>
                    <a href="/MSIB/courses.php" class="btn btn-secondary">Back</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
