<?php
    if(isset($_POST['add']))
    {
        $firsname=$_POST['firstname'];
        $laname = $_POST['lastname'];
        echo $firsname;
        echo sdasd;
        // mysql_connect("localhost", "root", "") or die(mysql_error()); 
        // mysql_select_db("angularjs") or die(mysql_error()); 
        // mysql_query("INSERT INTO friends (fname,lname) VALUES ('$firsname', '$laname')"); 
        // Print "Your information has been successfully added to the database."; 
    }
?> 