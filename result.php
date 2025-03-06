<?php include 'session.php'; ?>

<!DOCTYPE html>
<html>
<head>
        <title>Custom CV</title>
</head>
<body>
    <p><?php echo $_SESSION['name']; ?></p>
    <p><?php echo $_SESSION['specialty']; ?></p>
    <p><strong>Riwayat Pendidikan:</strong> <?php echo nl2br($_SESSION['education']); ?></p>
    <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>

    <p><a href="reset.php">Log out</a></p>
</body>
</html>