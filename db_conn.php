<?php  

$sname= "localhost";
$unmae= "vimakinf_admin-vimak";
$password = "Marley#Vimaklabs69!";

$db_name = "vimakinf_admin_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed";
}