<?php

$re = "/\\<li\\>[\\n, ,\\t,\\r]*[a-z]*[\\n, ,\\t,\\r]*\\<\\/li\\>/"; //regular expression, get all between the <li></li> 
$testfile = file_get_contents('http://www.paulnoll.com/Books/Clear-English/words-29-30-hundred.html');
preg_match_all($re, $testfile, $match);
$word_list=$match[0];
foreach($word_list as &$value){
	$value=str_replace("<li>", "",$value);
	$value=str_replace("</li>", "", $value);
}
 $current_word='';
