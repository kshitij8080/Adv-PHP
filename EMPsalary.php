<?php

class emp
{
    public $ename,$dname,$bsal,$da,$hra,$ta,$it,$pf,$pt,$gross,$ded,$net;
    function __construct($ename,$dname,$bsal)
    {
        $this->ename=$ename;
        $this->dname=$dname;
        $this->bsal=$bsal;
    }
    function calc_gross()
    {
        $this->da=$this->bsal*15/100;
        $this->hra=$this->bsal*25/100;
        $this->ta=$this->bsal*10/100;
        $this->gross=$this->da+$this->hra+$this->ta;
    }
    function calc_deduction()
    {
        $this->it=$this->bsal*5/100;
        $this->pf=$this->bsal*7/100;
        $this->pt=$this->bsal*9/100;
        $this->ded=$this->it+$this->pf+$this->pt;
    }
     function calc_net_sal()
     {
        $this->net=($this->bsal+$this->gross)-$this->ded;
     }
     function disp()
     {
        echo "<br>emp name:".$this->ename;
        echo "<br>dept name:".$this->dname;
        echo "<br>emp basic salary:".$this->bsal;
        echo "<br>DA:".$this->da;
        echo "<br>HRA:".$this->hra;
        echo "<br>TA:".$this->ta;
        echo "<br>IT:".$this->it;
        echo "<br>PF:".$this->pf;
        echo "<br>PT:".$this->pt;
        echo "<br>Gross salary:".$this->gross;
        echo "<br>deduction:".$this->ded;
        echo "<br>net salary:".$this->net;
     }
}

$ob=new emp("kxitij","Computer",100000);
$ob->calc_gross();
$ob->calc_deduction();
$ob->calc_net_sal();
$ob->disp();

?>