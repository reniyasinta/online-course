<?php require('prosesAdd.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Material</title> 
    <link href="../style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Add Material for Course ID: <?= htmlspecialchars($course_id); ?></h1>
        <form method="POST">
            <div class="mb-3">
                <label for="judul" class="form-label">Theme:</label>
                <input type="text" class="form-control" id="judul" name="judul" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Description:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" required></textarea>
            </div>
            <div class="mb-3">
                <label for="link_embed" class="form-label">Material Link:</label>
                <input type="text" class="form-control" id="link_embed" name="link_embed">
            </div>
            <button type="submit" class="btn btn-add">Add</button>
            <a href="/MSIB/materials.php?course_id=<?= htmlspecialchars($course_id); ?>" class="btn btn-secondary">Back</a>
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
