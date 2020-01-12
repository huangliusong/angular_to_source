<?php
function checkNum($num){
	return ($num%2) ? TRUE : FALSE;
}
$num=$_POST["n"];
if(checkNum($num) === TRUE){
	echo '奇数';
}else{
	echo '偶数';
}
?>
