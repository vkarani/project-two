<?php
$iterations=5;
$use_number=false;
$display_number="";
$use_symbol=false;
$display_symbol="";
if(! empty ($_GET)) {
  $iterations = $_GET[number_of_words];
  if(isset($_GET[add_number])) {
  	$use_number=true;
  }
  if(isset($_GET[add_symbol])) {
  	$use_symbol=true;
  }
  //$use_number = ;
  //$use_symbol = ;
}
if(($iterations < 1) ||( $iterations > 10)) {
	$iterations=5;
}

$re = "/\\<li\\>[\\n, ,\\t,\\r]*[a-z]*[\\n, ,\\t,\\r]*\\<\\/li\\>/"; //regular expression, get all between the <li></li> 
$testfile = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-29-30-hundred.html');
preg_match_all($re, $testfile, $match);
$word_list=$match[0];
foreach($word_list as &$value){
	$value=str_replace("<li>", "",$value);
	$value=str_replace("</li>", "", $value);
	$value=str_replace("\n", "", $value);
	$value=str_replace("\t", "", $value);
	$value=str_replace("\r", "", $value);
}
 $current_word='';
 
 
