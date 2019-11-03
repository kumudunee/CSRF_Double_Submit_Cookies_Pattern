<?php
    if (isset($_POST["token"]) && $_POST["token"] === $_COOKIE["token"]) {
        $tokenStatus = "Success";
    } else {
        $tokenStatus = "Error";
    }
?>