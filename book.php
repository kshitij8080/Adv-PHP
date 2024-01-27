<?php

header('content-type:text/xml');
echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<bookinfo>";
 echo "<book>";
  echo "<bookno>101</bookno>";
  echo "<bookname>java</bookname>";
  echo "<authorname>balguru</authorname>";
  echo "<price>350</price>";
  echo "<year>2022</year>";
 echo"</book>";
 echo "<book>";
  echo "<bookno>102</bookno>";
  echo "<bookname>PHP</bookname>";
  echo "<authorname>MR.patil</authorname>";
  echo "<price>450</price>";
  echo "<year>2023</year>";
 echo"</book>";
echo "</bookinfo>";
?>