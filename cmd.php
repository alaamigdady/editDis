<?php
  include 'leven.php'; // include Levenshtien class

  $stdin = fopen('php://stdin', 'r');// create a file to handle stdin

  echo "enter the first string :\n";

  $str1 = fgets($stdin); // get the first srting

  echo "enter the second string : \n";

  $str2 = fgets($stdin); // get the second string

  $distance = Levenshtein::helper($str1, $str2); // calling the function and get the result

  echo "minimun ditance needed is : ".$distance; ;

  fclose($stdin); 
?>
