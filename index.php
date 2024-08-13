<!DOCTYPE html>
<html lang="id">

<!-- username : admin ; password :12345 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"  rel="stylesheet">
    <style>
        .login-container {
            padding: 30px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-add:hover {
            background-color: #4683b7 !important;
        } 
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="login-container">
                    <h2 class="text-center mb-4">LOGIN INSTRUCTOR</h2>
                    <form action="prosesLogin.php" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                        <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <input type="checkbox" onclick="togglePassword()"> Show Password
                        </div>
                        <button type="submit" class="btn btn-add btn-block">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        
        function togglePassword() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }


        setTimeout(function() {
            var errorMessage = document.getElementById('errorMessage');
            if (errorMessage) {
                errorMessage.style.display = 'none';
            }
        }, 5000);
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

<?php
require('/xampp reni/htdocs/MSIB/layouts/footer.php');
?>

</html>