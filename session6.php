<?php

session_start();
$cname=$_SESSION["custname"];
$add=$_SESSION["add"];
$mob=$_SESSION["mob"];

$pname=$_POST["t1"];
$qty=$_POST["t2"];
$price=$_POST["t3"];
$tot=$qty*$price;

echo "<table border='1'>";
echo "<tr><td>customer name</td>$cname</tr>";
echo "<tr><td>customer address</td>$add</tr>";
echo "<tr><td>customer mon</td>$mob</tr>";
echo "<tr><td>product name</td>$pname</tr>";
echo "<tr><td>product qty</td>$qty</tr>";
echo "<tr><td>price</td>$price</tr>";
echo "<tr><td>total amount</td>$tot</tr>";
echo "</table>"
?>