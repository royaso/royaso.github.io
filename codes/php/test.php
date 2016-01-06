<?php
//it's commom for super class has a static function to generate child class object
abstract class general{
abstract function read();
abstract function write();
static function getIntance($atype){
	if($atype)
	return new atype;
	else
	return new btype;
}
}

class atype extends general{
	function write(){
	echo "atype::write()";
}
	function read(){
	echo "atype::read()";
}
}
class btype extends general{
	function write(){
	echo "btype::write()";
}
	function read(){
	echo "btype::read()";
}
}

$x=general::getIntance(false);
$x->write();
