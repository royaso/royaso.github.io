<?php
class testModel{
	function getData(){
	return 'royaso';
}
}

class testView{
	function displayData($data){
	echo 'displaying... '.$data;
}
}


class testController{
	function showData(){
	$myData=new testModel();
	$Data=$myData->getData();
	$myView=new testView();
	$myView->displayData($Data);
}
}

$myController=new testController();
$myController->showData();
