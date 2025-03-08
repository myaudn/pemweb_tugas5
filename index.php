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
        $error = "Email or Password is wrong!";
    }
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>  
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="loginbox">
            <p class="greet">Welcome!</p>
            <p class="acc1">create your own CV easily and quickly<br>here!</p>
            <form method="POST" class="first-form">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Log in</button>
            </form>
            <?php if (isset($error)) echo "<p style=\"color: #ff0000; text-align: center;\">$error</p>"; ?>
        </div>
    </div>
</body>
</html>