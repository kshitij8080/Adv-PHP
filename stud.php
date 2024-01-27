<?php

$s1=$_POST["t1"];
$flag=0;
$xml=simplexml_load_file("stud.xml");
if(!$xml)
  die("file not found....");

  foreach($xml->info as $a)
  {
     if($a->name==$s1)
     {
        echo "<br> roll no:".$a->rno;
        echo "<br> percentage:".$a->per;
        $flag=1;
        break;
     }
  }
  if($flag==0)
  {
     echo "not found....";
  }

?>