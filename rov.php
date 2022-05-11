<?php
function rovare($MyString) {
$MyString= strtolower($MyString);

  $l = 0;
  $r = strlen($MyString) - 1;

$consonants= array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z');
  while($r > $l){
	if(in_array($MyString[$l], $consonants)){
		$tempChars = "o" . $MyString[$l];

$newStr = substr_replace($MyString, $tempChars, $l + 1, 0);
$MyString = $newStr;
$l += 2; 
$r = strlen($MyString) - 1;
	}
    $l++;

  }

echo $MyString;
}

rovare("Kalas fint!"); 

?>