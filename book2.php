<?php

$s1=$_POST["t1"];
$flag=0;
$xml=simplexml_load_file("book.xml");
if(!$xml)
  die("file not found....");

  foreach($xml->book as $a)
  {
     if($a->year==$s1)
     {
        echo "<br> bookcode:".$a->bookcode;
        echo "<br> bookname:".$a->bookname;
        echo "<br> author:".$a->author;
        echo "<br> price".$a->price;
        $flag=1;
        break;
     }
  }
  if($flag==0)
  {
     echo "not found....";
  }

?>