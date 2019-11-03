<!DOCTYPE html>
<?php
    session_start();
    if (!isset($_COOKIE["active"]) || $_COOKIE["active"] !== session_id()) {
        header("Location: logout.php");
    }
?>
<html>
    <body>
        <h1>Welcome Admin!</h1>
        <form method="POST" action="submit.php" id="csrf">
            <button name="param" value="delete" type="submit">Delete Account</button>
        </form>
        <a href="logout.php">Logout</a>
        <script>
            var tokenInput = document.createElement("INPUT");
            tokenInput.setAttribute("type", "hidden");
            tokenInput.setAttribute("name", "token");
            tokenInput.setAttribute("value", getCookieValue("token"));
            document.getElementById("csrf").appendChild(tokenInput);

            function getCookieValue(name) {
                var cookieList = document.cookie.split(";");
                for (var i = 0; i < cookieList.length; i++) {
                    cookieList[i] = cookieList[i].trim();
                    var map = cookieList[i].split("=");
                    if (map[0] == name) {
                        return map[1];
                    }
                }
                return "";
            }
        </script>
    </body>
</html>