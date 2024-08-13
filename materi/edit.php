<?php require('prosesUpdate.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Material</title>
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Material</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="judul" class="form-label">Theme:</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?php echo htmlspecialchars($materi['judul']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Description:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required><?php echo htmlspecialchars($materi['deskripsi']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="link_embed" class="form-label">Material Link:</label>
                <input type="text" class="form-control" id="link_embed" name="link_embed" value="<?php echo htmlspecialchars($materi['link_embed']); ?>">
            </div>
            <button type="submit" class="btn btn-add">Update</button>
            <a href="/MSIB/materials.php?course_id=<?php echo htmlspecialchars($materi['course_id']); ?>" class="btn btn-secondary">Back</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
