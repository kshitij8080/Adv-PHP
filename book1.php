<?php

$xml=simplexml_load_file("book.xml");

if(!$xml)
  die("File not Found......");

    echo "<table border='1'><tr>";
    echo "<th>BOOK_CODE</th>";
    echo "<th>BOOKNAME</th>";
    echo "<th>BOOK_AUTHOR";
    echo "<th>YEAR</th>";
    echo "<th>PRICE</th></tr>";
    foreach($xml->book as $b)
    {
       echo "<tr><td>$b->bookcode</td>";
       echo "<td>$b->bookname</td>";
       echo "<td>$b->author</td>";
       echo "<td>$b->year</td>";
       echo "<td>$b->price</td></tr>";
    }
    

?>
