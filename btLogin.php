<?php
function checklogin(){
$uname= $_POST["username"];
$ppass= $_POST["password"];
echo $name;
echo $pass;
if($uname==("admin") & $ppass==("admin")){
	echo"echo login thanh cong";
}
 }
 ?>