<?php

	$name = array("rahul","sonam","sumit","priti");

	$k=print_r($name,true);
	echo $k;
	echo "</br>";
//	foreach($name as $key=>$val):
//		echo $key . "  ".$val . "</br>";
//	endforeach;

$fees=array("rahul"=>500,"sonam"=>600,"sumit"=>700);
$v=print_r($fees,true);
echo $v;
	//$keys=array_keys($fees);
	//foreach($fees as $k=>$v):
//		echo $k . " => ".$v."</br>";
//	endforeach;

	//for($i=0;$i<count($keys);$i++):
	//	echo $keys[$i]."=>".$fees[$keys[$i]]."</br>";
	//endfor;
?>