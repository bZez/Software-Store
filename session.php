<?php

	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "software_store";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password , $dbname);

    if (isset ($_GET['para1'])) {
		$email = $_GET['para1'];
		$name = $_GET['para2'];
        session_start();
        $sql_search = "SELECT ID AS id FROM user WHERE email='$email' ";
		$retval_ID = mysqli_query( $conn , $sql_search );
        $result=mysqli_fetch_assoc($retval_ID);
        if(! $result){
            $sql_create = "INSERT INTO user (name , email) VALUES('$name','$email')";
            $retval_create  = mysqli_query($conn, $sql_create);
        }else{
           	$_SESSION['userID']=$result['id'];
           	header("Location: index.php");
            exit();
        }
}
?>