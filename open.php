<?php      
	$server = "localhost";
    $username = "root";
    $password = "";
        $con = mysqli_connect($server, $username, $password,"banking");
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
?>
