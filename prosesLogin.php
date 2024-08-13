<?php
session_start();

require('/xampp reni/htdocs/MSIB/databases/koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$stmt = $koneksi->prepare("SELECT * FROM admins WHERE username = ?");
if (!$stmt) {
    die("Prepare failed: " . $koneksi->error);
}

$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result === false) {
    die("Query failed: " . $koneksi->error);
}
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
        $_SESSION['login'] = true;
        header("Location: /MSIB/courses.php");
        exit();
    } else {
        echo "
        <script>
            alert('Username atau Password salah');
            document.location.href='index.php';
        </script>";
        exit();
    }
} else {
    echo "
    <script>
        alert('Username atau Password salah');
        document.location.href='index.php';
    </script>";
    exit();
}

$stmt->close();
$koneksi->close();
?>
