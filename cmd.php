<?php
  include 'leven.php'; // include Levenshtien class

  $stdin = fopen('php://stdin', 'r');

  echo "enter the first string :\n";

  $str1 = fgets($stdin);

  echo "enter the second string : \n";

  $str2 = fgets($stdin);

  $distance = Levenshtein::helper($str1, $str2);

  echo "minimun ditance needed is : ".$distance; ;

  fclose($stdin);
?>
