<?php

$connect = mysqli_connect("localhost", "root", "", "coder") or die ("connection failed");

if($connect) {


	echo "connection successfull";
}
else {


	echo "not connect";
}	

?>