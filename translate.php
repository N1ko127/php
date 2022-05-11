<?php
function rovare($MyString) {
$MyString= strtolower($MyString);

  $l = 0;
  $r = strlen($MyString) - 1;
	$flag = 0;
	
$consonants= array('b', 'c', 'd', 'f', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'z');
  while($r > $l){
	if(in_array($MyString[$l], $consonants)){
		if($l + 2 < $r && $MyString[$l + 1] == "o" && $MyString [$l + 2] == $MyString [$l]){
		$l += 3;
		}else { 
			$flag = 1;
			break;
		}
	}
else {
	$l++;
}
		


  }
if ($flag == 0) {
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
  
} 

 echo $flag;
}


rovare("Kokalolasos fofinontot"); 

?>