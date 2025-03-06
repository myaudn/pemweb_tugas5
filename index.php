<?php
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>  
</head>
<body>
    <div class="container">
        <div class="loginbox">
            <form action="input.php" method="POST">
                <label>Masukkan Email Anda</label>
                <input type="email" name="email" required>
                <button type="submit">Next</button>
            </form>
        </div>
    </div>
</body>
</html>