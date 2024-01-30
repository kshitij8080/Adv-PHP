<?php

 class circle
 {
    function area($r)
    {
        $a=3.15*$r*$r;
        echo "<br>Area of circle=".$a;
    }
    function circum($r)
    {
        $a=2*3.14*$r;
        echo "<br>Circumfrence=".$a;
    }
 }

 $ob=new circle;
 $ob->area(5.5);
 $ob->circum(8.8);

?>