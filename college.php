<?php

$xml=simplexml_load_file("college.xml");

if(!$xml)
  die("File not foumd....");

  foreach($xml->student as $s)
  {
     echo "<br><br>student roll no:".$s->rno;
     echo "<br>student name:".$s->name;
     echo "<br>student percentage:".$s->per;
  } 

?>