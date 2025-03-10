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
        <title>CV Kustom</title>
        <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="displaycv">
            <div class="upper">
                <div class="mainpart">
                    <?php
                        if (isset($_SESSION['pic_path'])) {
                            echo "<div class='picholder'><img src='" . htmlspecialchars($_SESSION['pic_path']) . "' alt='Foto Profil'></div>";
                        }
                    ?>
                    <p id="name"><?php echo $_SESSION['name']; ?></p>
                    <p id="specialty"><?php echo $_SESSION['specialty']; ?></p>
                    <p class="birth"><?php echo $_SESSION['city']; ?>, <?php echo $_SESSION['birth']; ?></p>
                </div>
                <div class="co-main">
                    <p id="about"><?php echo nl2br($_SESSION['about']); ?></p>
                    <p class="subtitle">Skill</p><hr style="border: 1px solid  #673C33; width: 90%; margin: 0 20px 0 auto;">
                    <p id="hardskill"><?php echo nl2br($_SESSION['hardskill']); ?></p>
                </div>
            </div>
            
            <div class="lower">
                <div class="expe">
                <p class="subtitle"><strong>Riwayat Pendidikan</strong><br></p>
                <p><?php echo nl2br($_SESSION['education']); ?></p>
                </div>
                <p id="softskill"><?php echo nl2br($_SESSION['softskill']); ?></p>
                <div class="contact">
                    <p class="subtitle">Nomor Telepon:</p>
                    <p><?php echo $_SESSION['num']; ?></p>
                    <p class="subtitle">Email:</p>
                    <p><?php echo $_SESSION['email']; ?></p>
                    <p class="subtitle">Github:</p>
                    <p><?php echo $_SESSION['gith']; ?></p>
                </div>
            </div>


            <p id="logout"><a href="reset.php">Log out</a></p>
        </div>
    </div>

</body>
</html>