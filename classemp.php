<?php

class Emp
{
    public $eno,$ename,$sal;
    function accept($eno,$ename,$sal)
    {
        $this->eno=$eno;
        $this->ename=$ename;
        $this->sal=$sal;
    }
    function disp()
    {
        echo "<br>Emp no=".$this->eno;
        echo "<br>Emp name=".$this->ename;
        echo "<br>Emp salary=".$this->sal;
    }
}

$ob=new Emp();
$ob1=new Emp();
$ob->accept(101,"om",50000);
$ob1->accept(102,"sai",60000);
$ob->disp();
$ob1->disp();

?>