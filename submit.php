<?php
    session_start();
    
    if (!isset($_COOKIE["active"]) || $_COOKIE["active"] !== session_id()) {
        header("Location: logout.php");
    }

    require "token_check.php";

    echo "<h1>$tokenStatus</h1>";

    switch ($tokenStatus) {
        case "Success":
            echo "<p>Account Deleted</p>";
            break;
        case "Error":
            echo "<p>Invalid Token</p>";
            break;
    }
?>