<?php

$xml=simplexml_load_file("college1.xml");
if(!$xml)
   die("File Not Found");

   $obj=$xml->addchild("rno","231");
   $obj->addattribute("div","D");
   $xml->addchild("name","aman");
   $xml->addchild("per","56");

?>