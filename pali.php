<?php
function Palindrome($MyString) {
	$originalstring = $MyString;
	$originalLenght = strlen($originalstring) - 1;
	$MyString = str_replace(' ', '', $MyString );

  $l = 0;
  $r = strlen($MyString) - 1;
  $flag = 0;
  $flagtwo = 0;
  
if($originalLenght != $r){
	$flagtwo = 1;
}

  while($r > $l){
    if ($MyString[$l] != $MyString[$r]){
      $flag = 1;
      break;
    }
    $l++;
    $r--;
  }

  if ($flag == 0){
	  if($flagtwo == 0){
		  echo $originalstring." is a real Palindrome string.\n";
	  }
	  else {
		  echo $originalstring." is a fake Palindrome string.\n";
	  }

  } else {
    echo $originalstring." is not a fake palindrome.\n";
  }
}

Palindrome("ni talar bra latin"); 

?>