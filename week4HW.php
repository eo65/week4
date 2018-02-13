<?php
$date = date("Y-m-d");
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
echo "<br><br>";


echo "2. Replace “-“ in \$date with “/“ and print out the result:<br>";
$date = str_replace("-", "/", $date);
echo "<br><br>";


echo "3. Compare \$date with \$tar and then if the result is greater than 0, you should print out “the future”; if the result is less than 0, you should print out “the past”; if the result is equal to 0, you should print out “Oops”. You must use if-elseif statement in this question:<br>";
if (strcmp($date, $tar) > 0) {
 echo "The Future <br><br>";
} else if (strcmp($date, $tar) < 0) {
 echo "The Past <br><br>";
} else if (strcmp($date, $tar) == 0) {
 echo "Oops <br><br>";
} else {
 echo "THERE IS A PROBLEM <br><br>";
}


echo "4. Search for “/“ in \$date and print out all positions. If there are more than one position, please delimit each position value with space:<br>";
$DateLength = strlen($date);
echo "'/' is located in positions: ";
for( $i = 0; $i <= $DateLength; $i++ ) { 
  $char = substr($date, $i, 1);
  if($char === "/")
   echo "$i  ";
} echo "<br><br>";


echo "5. Count the number of words in \$date and print out the result:<br>";
echo "There are " . str_word_count($date) . " words in the string <br><br>";


echo "6. Return the length of a string and print out the result:<br>";
echo "The date length is " . $DateLength . "<br><br>";
//Look at Line 43


echo "7. Return the ASCII value of the first character of a string and print out the result<br>";
echo ord("Datetime") . " is the ASCII value of the first character of a string Datetime. <br><br>";

echo "8. Return the last two characters in \$date and print out the result:<br>";
echo substr($date, -2) . " are the last two char of date string <br><br>";


echo "9. Break \$date into an array and set “separator” parameter as “/“ and print out the each array
element and delimit all elements with space:<br>";
$newArray = explode("/", $date);
foreach ($newArray as $key => $value) {
 echo "$value ";
} echo "<br><br>";


echo "10. Loop through the array \$year and you need to identify whether each year is a leap year. If it
is, print out “True”, otherwise, print out “False”:<br>";
foreach ($year as $index => $yr) {
  $define = cal_days_in_month(CAL_GREGORIAN, 2, $yr);
  if($define == 29) {
      echo "true ";
  } else {
      echo "false ";  
  }    
}
?>
