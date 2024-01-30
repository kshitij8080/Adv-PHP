<?php

class distance
{
    function convert_feet_to_inches($feet)
    {
        $inches=$feet*12;
        echo "<br> inches=".$inches;
    }
    function convert_inches_to_feet($inches)
    {
        $feet=$inches/12;
        echo "<br>feet=".$feet;
    }
}
$ob=new distance();
$val=$_POST["t1"];
$ch=$_POST["r1"];
if($ch=="feet")
  $ob->convert_feet_to_inches($val);
if($ch=="inch")
  $ob->convert_inches_to_feet($val);

?>