<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $domain = substr(strrchr($email, "@"), 1);
    if ($password === $domain) {
        $_SESSION['email'] = $email;
        header("Location: input.php");
        exit();
    } else {
        $error = "Email atau password salah.";
    }
}
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
                <label>Masukkan Email Anda</label><br>
                Email: <input type="email" name="email" required><br>
                Password: <input type="password" name="password" required><br>
                <button type="submit">Log in</button>
            </form>
            <?php if (isset($error)) echo "<p>$error</p>"; ?>
        </div>
    </div>
</body>
</html>