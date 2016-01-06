<?php
class test{
function aa(&$name){
$n=4;
	echo $name.='uxxx';
echo $n++;
}
}

$uu=new test;

$ii='asdfddd';
$uu->aa($ii);
var_dump($ii);
