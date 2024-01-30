<?php

 class operations
 {
    function add($a,$b)
    {
        $x=$a+$b;
        echo "<br>Addition=".$x;
    }
    function substraction($a,$b)
    {
        $x=$a-$b;
        echo "<br>substraction=".$x;
    }
    function multiplication($a,$b)
    {
        $x=$a*$b;
        echo "<br>Multiplication=".$x;
    }
    function divide($a,$b)
    {
        $x=$a/$b;
        echo "<br>division=".$x;
    }
 }

 $ob=new operations;
 $ob->add(10,10);
 $ob->substraction(10,8);
 $ob->multiplication(2,2);
 $ob->divide(12,2);

?>