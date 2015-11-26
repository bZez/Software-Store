<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "software_store";

	// Create connection
	$conn = mysql_connect($servername, $username, $password);

	if(! $conn )
	{
	  die('Could not connect: ' . mysql_error());
	}

	if (isset ($_GET['Download'])) {
	$s_id = $_GET['Download']; 
	$link = $_GET['link'];
	$date = date("Y-m-d h:i:sa");
	$userID = $_GET['userID'];
	$sql_download = "INSERT INTO download(user_id,s_id,date) VALUES ('$userID','$s_id','$date')";
	mysql_select_db($dbname);
	$retval = mysql_query( $sql_download, $conn );
	if(! $retval )
	{
	   die('Could not update data: ' . mysql_error());
	}
	echo "Updated data successfully\n";
	}
	header('Location: '.$link);
	exit();
?>