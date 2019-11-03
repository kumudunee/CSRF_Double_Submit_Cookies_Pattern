<!DOCTYPE html>
<?php
    session_start();
    if (isset($_COOKIE["active"]) && $_COOKIE["active"] === session_id()) {
        header("Location: user.php");
    }
?>
<html>
    <body>
        <h1>Login</h1>
        <form method="POST" action="login.php">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </body>
</html>