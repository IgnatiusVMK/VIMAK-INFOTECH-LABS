<?php
 $dbhost="localhost";
 $dbuser="vimakinf_admin-vimak";
 $dbpass="Marley#Vimaklabs69!";
 $dbname="vimakinf_vimak";

 $conn=mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

 if(!$conn){
    die("Could not connect to the database".mysqli_connect_error());
 }
?>
