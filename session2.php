<?php

session_start();
$_SESSION["empno"]=$_POST["t1"];
$_SESSION["ename"]=$_POST["t2"];
$_SESSION["eadd"]=$_POST["t3"];

?>
<html>
    <body>
        <form method="post" action="session3.php">
            Basic sal:
            <input type="text" name="t1"><br>
            DA:
            <input type="text" name="t2"><br>
            HRA:
            <input type="text" name="t3"><br>
            <input type="submit" value="next">
        </form>
    </body>
</html>