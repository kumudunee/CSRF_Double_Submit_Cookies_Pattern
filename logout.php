<?php
    session_start();
    session_destroy();
    setcookie("active", "", time() - 1);
    setcookie("token", "", time() - 1);
    header("Location: index.php");
?>