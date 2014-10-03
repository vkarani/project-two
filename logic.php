<?php
$current_word="";
$iterations=5;
$use_number=false;
$display_number="";
$use_symbol=false;
$display_symbol="";
$symbols="!@#$%^&*()_-+="; // a set of random characters to use in the password 
if(! empty ($_GET)) {
  $iterations = $_GET[number_of_words];
  if(isset($_GET[add_number])) {
  	$use_number=true;
  }
  if(isset($_GET[add_symbol])) {
  	$use_symbol=true;
  }
}
if(($iterations < 1) ||( $iterations > 10)) {
	$iterations=5;
}

$re = "/\\<li\\>[\\n, ,\\t,\\r]*[a-z]*[\\n, ,\\t,\\r]*\\<\\/li\\>/"; //regular expression, get all between the <li></li> 
$testfile = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-29-30-hundred.html');
preg_match_all($re, $testfile, $match);
$word_list=$match[0];
foreach($word_list as &$value){
	/*Remove unneeded characters*/
	$value=str_replace("<li>", "",$value);
	$value=str_replace("</li>", "", $value);
	$value=str_replace("\n", "", $value);
	$value=str_replace("\t", "", $value);
	$value=str_replace("\r", "", $value);
	
	/*Pick a random member of the string and replace it 
	with a random member of the test string*/
	if($use_symbol==true){
		$value_index=rand(0,strlen($value));//pick a random member of the string
		$random_string_index=rand(0,strlen($symbols));//pick a random member of the random character string
		$value[$value_index]=$symbols[$random_string_index];//insert random character into string
	}
	
	/*Pick a random member of the string and
	Replace it with a random num from 0-9*/
	if($use_number==true){
		$value_index=rand(0,strlen($value));//pick a random member of the string
	   $value[$value_index]=rand(0,9);//and replace it with a random integer from 0-9
	}	
}
 
 
 
