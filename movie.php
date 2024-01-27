<?php

$xml=simplexml_load_file("movie.xml");

if(!$xml)
  die("File not Found......");

foreach($xml->category as $c)
{
    echo "<br><br>movie Title:".$c->movieTitle;
    echo "<br>actorname:".$c->actorname;
    echo "<br>releaseyear:".$c->releaseyear;
}

?>