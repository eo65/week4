<?php
$date = date("Y/m/d");
$tar = date("Y/m/d");
$year = array(0 => 2012, 1 => 396, 2 => 300, 3 => 2000, 4 => 1100, 5 => 1089);

$message1 = <<<'MESSAGE1'
The value of $date:
MESSAGE1;

$message2 = <<<'MESSAGE2'
The value of $tar:
MESSAGE2;

$message3 = <<<'MESSAGE3'
The value of $year:
MESSAGE3;

echo "$message1 " . $date . "<br>";
echo "$message2 " . $tar . "<br>";
echo "$message3 ";
print_r($year);
echo "<br>";

if ($date > $tar) {
 echo "The Future <br>";
} else if ($date < $tar) {
 echo "The Past <br>";
} else if ($date == $tar) {
 echo "Oops <br>";
} else {
 echo "THERE IS A PROBLEM <br>";
}

$DateLength = strlen($date);

echo "'/' is located in positions: ";
for( $i = 0; $i <= $DateLength; $i++ ) { 
  $char = substr($date, $i, 1);
  if($char === "/")
   echo "$i  ";
} echo "<br>";

echo "There are " . str_word_count($date) . " words in the string <br>";

echo "The date length is " . $DateLength . "<br>";

echo ord("Datetime") . " is the ASCII value of the first character of a string Datetime. <br>";

$newArray = explode("/", $date);

foreach ($newArray as $key => $value) {
 echo "$value ";
} echo "<br>";

foreach ($year as $index => $yr) {
  $define = cal_days_in_month(CAL_GREGORIAN, 2, $yr);
  if($define == 29) {
      echo "true ";
  } else {
      echo "false ";  
  }
}
?>