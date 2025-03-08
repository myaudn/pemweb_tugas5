<?php include 'session.php';
if (!isset($_SESSION['name']) || !isset($_SESSION['specialty']) || !isset($_SESSION['education'])) {
    header("Location: input.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Custom CV</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="displaycv">
                <?php
                if (isset($_SESSION['pic_path'])) {
                    var_dump($_SESSION['pic_path']);
                    echo "<div class='picholder'><img src='" . htmlspecialchars($_SESSION['pic_path']) . "' alt='Foto Profil'></div>";
                }
                ?>
            <p><?php echo $_SESSION['name']; ?></p>
            <p><?php echo $_SESSION['specialty']; ?></p>
            <p><strong>Riwayat Pendidikan:</strong> <?php echo nl2br($_SESSION['education']); ?></p>
            <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>

            <p><a href="reset.php">Log out</a></p>
        </div>
    </div>

</body>
</html>