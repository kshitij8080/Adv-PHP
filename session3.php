<?php

session_start();
$eno=$_SESSION["empno"];
$ename=$_SESSION["ename"];
$eaddr=$_SESSION["eadd"];

$sal=$_POST["t1"];
$da=$_POST["t2"];
$hra=$_POST["t3"];
$totsal=$sal+$da+$hra;

echo "<h1>emp no:".$eno;
echo "<h1>emp name:".$ename;
echo "<h1>emp add:".$eaddr;
echo "<h1>emp salary:".$sal;
echo "<h1>DA:".$da;
echo "<h1>hra:".$hra;
echo "<h1>Total sal:".$totsal;

?>