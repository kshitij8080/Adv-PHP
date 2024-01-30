<?php

class temp
{
    public $c,$f;
    function __construct($c,$f)
    {
        $this->c=$c;
        $this->f=$f;
    }
    function convert_to_f()
    {
        $ans=$this->c*9/5+32;
        echo "<br> celcius to fehrenheit=".$ans;
    }
    function convert_to_c()
    {
        $ans=$this->f-32*5/9;
        echo "<br> fehrenheit to celcius=".$ans;
    }
}

$ob=new temp(50,103);
$ob->convert_to_f();
$ob->convert_to_c();
?>