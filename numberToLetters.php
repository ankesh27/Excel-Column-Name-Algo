<?php
Class NumberToLetters{
       
       function getNameFromNumber($num) {
	   $numeric = ($num - 1) % 26;
	   $letter = chr(65 + $numeric);
	   $num2 = intval(($num - 1) / 26);
	   if ($num2 > 0) {
	       return $this->getNameFromNumber($num2) . $letter;
	   } else {
	       return $letter;
	   }
       }
}
$obj = new NumberToLetters();
echo $obj->getNameFromNumber(1000000);
?>