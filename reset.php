<?php
session_start();
session_destroy();
header("Lecation.index.php");
exit();
?>