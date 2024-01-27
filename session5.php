<?php

session_start();
$_SESSION["custname"]=$_POST["t1"];
$_SESSION["add"]=$_POST["t2"];
$_SESSION["mob"]=$_POST["t3"];

?>
<html>
    <body>
        <form method="post" action="session6.php">
            product name:
            <input type="text" name="t1"><br>
            QTY:
            <input type="text" name="t2"><br>
            Rate:
            <input type="text" name="t3"><br>
            <input type="submit" value="next">
        </form>
    </body>
</html>