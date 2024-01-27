<?php

header('content-type:text/xml');
echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<course>";
 echo "<sybbaca>";
  echo "<studentname>om</studentname>";
  echo "<classname>A</classname>";
  echo "<percentage>66.87</percentage>";
  echo "</sybbaca>";
 echo "<sybbaca>";
  echo "<studentname>sai</studentname>";
  echo "<classname>B</classname>";
  echo "<percentage>78.87</percentage>";
 echo "</sybbaca>";
 echo "<sybbaca>";
  echo "<studentname>Ram</studentname>";
  echo "<classname>C</classname>";
  echo "<percentage>96.87</percentage>";
  echo "</sybbaca>"; 
 echo "<sybbaca>";
  echo "<studentname>sham</studentname>";
  echo "<classname>D</classname>";
  echo "<percentage>56.87</percentage>";
  echo "</sybbaca>";
 echo "<sybbaca>";
  echo "<studentname>Aman</studentname>";
  echo "<classname>F</classname>";
  echo "<percentage>36.87</percentage>";
  echo "</sybbaca>";
echo"</course>";

?>