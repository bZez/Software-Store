<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software_store";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $info = pathinfo($_FILES['fileToUpload']['name']);
    //$ext = $info['extension']; // get the extension of the file

    $image_name = basename($_FILES['fileToUpload']['name']);

    $target = 'img/'.$image_name;
    move_uploaded_file( $_FILES['fileToUpload']['tmp_name'], $target);
   

        // set parameters and execute
    $name = $_POST["name"];
    $category = $_POST["category"];
    $amount = $_POST["amount"];
    $link = $_POST["link"];
    $description = $_POST["description"];
    
    // prepare and bind
    $sql = "INSERT INTO software (name , catagory , discription , amount ,link, image ) VALUES ('$name','$category','$description','$amount','$link','$image_name')";
    //mysqli_select_db($dbname);
    
    $retval = mysqli_query( $conn, $sql);
    if(! $retval )
    {
      die('Could not enter data: ' . mysql_error());
    }
    echo "Entered data successfully\n";
    mysqli_close($conn);
    }
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aqvatarius.com/themes/taurus_v12/html/sample_registration by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2015 03:46:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>        
    <title>Taurus</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <link rel="icon" type="image/ico" href="favicon"/>
    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css" />        
    
    <script type='text/javascript' src='js/plugins/jquery/jquery.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui.min.js'></script>   
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>    
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/uniform/jquery.uniform.min.js'></script>
    
    <script type='text/javascript' src='js/plugins.js'></script>    
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
</head>
<body class="bg-img-num1" style="background-color:#082648"> 
    
    <div class="container"> 



        <div class="registration-block">

            <div style="text-align:center; padding-bottom: 30px"><h2>You Can Add New Software Here</h2></div>  
            <div class="block block-transparent">
                <form method="post" enctype='multipart/form-data'>
                    Name: <input type="text" name="name"><br>
                    Category: <input type="text" name="category"><br>
                    Amount: <input type="number" name="amount"><br>
                    Link : <input type="text" name="link"><br>
                    Description: <textarea type="text" name="description"></textarea><br> 
                    Upload Image: <input type="file" name="fileToUpload" id="fileToUpload"><br>
                    <input type="submit">
                </form>
            </div>
        </div>

    </div>

</body>

<!-- Mirrored from aqvatarius.com/themes/taurus_v12/html/sample_registration by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2015 03:46:53 GMT -->
</html>