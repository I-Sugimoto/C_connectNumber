<?php
$n = 10;
$s = "♪";
$array = array();

for ($i = 0; $i < $n; $i++) 
{   
	//array_pushによる配列要素の追加。
 	array_push($array, $s);
 	
} 

 //配列要素を文字列により連結する。
 $connection = implode($array);
 
 echo $connection;
