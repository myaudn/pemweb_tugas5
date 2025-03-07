<?php include 'session.php';
if (!isset($_SESSION['name']) || !isset($_SESSION['specialty']) || !isset($_SESSION['education'])) {
    header("Location: input.php");
    exit;
}
?>

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