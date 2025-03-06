<?php include 'session.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['specialty'] = $_POST['specialty'];
    $_SESSION['education'] = $_POST['education'];
    header("Location: result.php");
    exit();
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form CV</title>  
</head>
<body>
    <form method="POST">
        Nama: <input type="text" name="name" required><br>
        Bidang Keahlian: <input type="text" name="specialty" required><br>
        Riwayat pendidikan: <textarea name="education" required></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>