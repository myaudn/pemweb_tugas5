<?php
session_start();

if (isset($_SESSION['pic_path'])) {
    if (file_exists($_SESSION['pic_path'])) {
        unlink($_SESSION['pic_path']);
    }
    unset($_SESSION['pic_path']);
}

session_destroy();
header("Location: index.php");
exit();
?>