<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aqvatarius.com/themes/taurus_v12/html/sample_tasks by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2015 03:46:56 GMT -->
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
    <script type='text/javascript' src='js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    
    <script type='text/javascript' src='js/plugins.js'></script>    
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
</head>
<body class="bg-img-num1"> 

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
        $date = date("Y-m-d h:i:sa");
        $sql_download = "INSERT INTO download(user_id,s_id,date) VALUES (3,'$s_id','$date')";
        mysql_select_db($dbname);
        $retval = mysql_query( $sql_download, $conn );
        if(! $retval )
        {
           die('Could not update data: ' . mysql_error());
        }
        echo "Updated data successfully\n";


       }
       
       if (isset ($_GET['like'])) {
        echo 'get method';
        $like = $_GET['like'];
        $unlike = $_GET['unlike'];
        $id = $_GET['id'];

        if($like ==0){
            $sql_like = "UPDATE software SET unlike=unlike+1 WHERE sid = '$id' ";
            mysql_select_db($dbname);
            $retval = mysql_query( $sql_like, $conn );
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }else{
               header("Location: index.php");
               exit();
            }
        }
        if($unlike ==0){
            $sql_unlike = "UPDATE software SET likes = likes+1 WHERE sid= '$id' ";
            mysql_select_db($dbname);
            $retval = mysql_query( $sql_unlike, $conn );
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }else{
               header("Location: index.php");
               exit();
            }
        }
       }

       $sql = 'SELECT * FROM software';
       mysql_select_db($dbname);
       $retval = mysql_query( $sql, $conn );
       
       if(! $retval )
       {
          die('Could not get data: ' . mysql_error());
       }
       
    ?>


    <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('slimg/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="slimg/red.jpg" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">Download Software</div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Download software in just a one click</div>
                <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;">
                    <img src="slimg/c-phone.png" style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;" />
                    <img src="slimg/c-jssor-slider.png" data-u="caption" data-t="1" style="position: absolute; top: 70px; left: 130px; width: 102px; height: 78px;" />
                    <img src="slimg/c-text.png" data-u="caption" data-t="2" style="position: absolute; top: 153px; left: 163px; width: 80px; height: 53px;" />
                    <img src="slimg/c-fruit.png" data-u="caption" data-t="3" style="position: absolute; top: 60px; left: 220px; width: 140px; height: 90px;" />
                    <img src="slimg/c-navigator.png" data-u="caption" data-t="4" style="position: absolute; top: -123px; left: 121px; width: 200px; height: 155px;" />
                </div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <img src="slimg/c-phone-horizontal.png" style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" />
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                        <img src="slimg/c-slide-1.jpg" data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" />
                        <img src="slimg/c-slide-3.jpg" data-u="caption" data-t="7" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" />
                    </div>
                    <img src="slimg/c-navigator-horizontal.png" style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" />
                    <img src="slimg/c-finger-pointing.png" data-u="caption" data-t="8" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" />
                </div>
            </div>

            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="slimg/red.jpg" />
                <div style="position: absolute; top: 30px; left: 30px; width: 480px; height: 120px; font-size: 50px; color: #ffffff; line-height: 60px;">Rate Software</div>
                <div style="position: absolute; top: 300px; left: 30px; width: 480px; height: 120px; font-size: 30px; color: #ffffff; line-height: 38px;">Rate your software experience</div>
                <div data-u="caption" data-t="0" style="position: absolute; top: 100px; left: 600px; width: 445px; height: 300px;">
                    <img src="slimg/c-phone.png" style="position: absolute; top: 0px; left: 0px; width: 445px; height: 300px;" />
                    <img src="slimg/c-jssor-slider.png" data-u="caption" data-t="1" style="position: absolute; top: 70px; left: 130px; width: 102px; height: 78px;" />
                    <img src="slimg/c-text.png" data-u="caption" data-t="2" style="position: absolute; top: 153px; left: 163px; width: 80px; height: 53px;" />
                    <img src="slimg/c-fruit.png" data-u="caption" data-t="3" style="position: absolute; top: 60px; left: 220px; width: 140px; height: 90px;" />
                    <img src="slimg/c-navigator.png" data-u="caption" data-t="4" style="position: absolute; top: -123px; left: 121px; width: 200px; height: 155px;" />
                </div>
                <div data-u="caption" data-t="5" style="position: absolute; top: 120px; left: 650px; width: 470px; height: 220px;">
                    <img src="slimg/c-phone-horizontal.png" style="position: absolute; top: 0px; left: 0px; width: 470px; height: 220px;" />
                    <div style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px; overflow: hidden;">
                        <img src="slimg/c-slide-1.jpg" data-u="caption" data-t="6" style="position: absolute; top: 0px; left: 0px; width: 379px; height: 213px;" />
                        <img src="slimg/c-slide-11.jpg" data-u="caption" data-t="7" style="position: absolute; top: 0px; left: 379px; width: 379px; height: 213px;" />
                    </div>
                    <img src="slimg/c-navigator-horizontal.png" style="position: absolute; top: 4px; left: 45px; width: 379px; height: 213px;" />
                    <img src="slimg/c-finger-pointing.png" data-u="caption" data-t="8" style="position: absolute; top: 740px; left: 1600px; width: 257px; height: 300px;" />
                </div>
            </div>
              
           
        </div>
            
        <div class="row">                   
            <div class="col-md-12">
                
                 <nav class="navbar brb" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-reorder"></span>                            
                        </button>                                                
                        <a class="navbar-brand" href="index-2"><img src="img/logo.png"/></a>                                                                                     
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">                                     
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index-2">
                                    <span class="icon-home"></span> dashboard
                                </a>
                            </li>                                                    
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="search..."/>
                            </div>                            
                        </form>                                            
                    </div>
                </nav>               

            </div>            
        </div>

        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="#">Pages</a></li>                                        
                    <li class="active">Tickets</li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-9">
                <div class="block block-transparent nm">
                    <div class="content controls">
                        <div class="form-row">
                            <div class="col-md-3">
                                <select class="form-control">
                                    <option>By date</option>
                                    <option>By priority</option>
                                    <option>By name a-z</option>
                                    <option>By name z-a</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="icon-search"></span></div>
                                    <input class="form-control" placeholder="What are you searchin for in tasks?"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="icon-calendar"></span></div>
                                    <input class="form-control datepicker" placeholder="Due by"/>
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>

                <div class="block block-transparent nm">
                    <div class="header">
                        <h2>By date</h2>
                        <div class="pull-right">
                            <ul class="buttons">
                                <li><a href="#" class="tasks_view_block"><i class="icon-th"></i></a></li>
                                <li><a href="#" class="tasks_view_list"><i class="icon-list-ul"></i></a></li>
                            </ul>
                        </div>                        
                    </div>
                </div>
                

                <div class="block block-transparent">
                    <div class="container">
        <?php 
        while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
                  echo'<div class="col-md-12">
                            <div class="row">  
                                <div class="col-md-12" style="background-color:#ffffff; height:220px; margin-bottom:25px; padding:10px">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div>
                                                    <img src="img/'.$row['image'].'" alt="Smiley face" height="100%" width="100%" style="radius:50%">
                                                </div>
                                            </div>
                                            <div class="col-md-8" style="color:#000000; font-size:20px">
                                                <div>
                                                    '.$row['name'].'
                                                    <hr>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <button type="button" class="btn btn-primary" style="width:150px; background-color:#2B4E6C; border-color:#2B4E6C" onclick="window.location.reload();"><a href="download.php?Download='.$row['sid'].'&link='.$row['link'].'" target="_blank" "); ">Download</a></button>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button disabled type="button" class="btn btn-primary" style="width:100%; background-color:#2B4E6C; border-color:#2B4E6C">'.$row['amount'].'.$</button>
                                                            </div>
                                
                                                            <div class="col-md-7">
                                                                <div class="progress" style="background-color:#F4F4F4">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:'.$row['rating'].'%; background-color:#00004F">
                                                                        Rating '.$row['rating'].'%
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="color:#000000; font-size:20px">
                                                <div>
                                                    <button type="button" class="btn btn-primary" style="width:100%px; background-color:#2B4E6C; border-color:#2B4E6C" ><a href="index.php?unlike=0&like=1&id='.$row['sid'].'"><span class="icon-thumbs-up"></span>'.$row['likes'].'</a></button>
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="color:#000000; font-size:20px">
                                                <div>
                                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><a href="index.php?like=0&unlike=1&id='.$row['sid'].'"><span class="icon-thumbs-down"></span> '.$row['unlike'].'</a></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="color:#000000; padding-top:122px">
                                        <div class="well" style="background-color: rgba(245, 245, 245, 0.48);height: 78px;">
                                        '.$row['discription'].'
                                        </div>
                                    </div>

                                </div>
                                
                            </div>
                        </div>';
       }
       
       echo "Fetched data successfully\n";

        ?>
                    </div>
                </div>
                   
                
            </div>
            <div class="col-md-3">
                <div style="background-color:#ffffff">
               </div>

            <?php
                $sql_sub = 'SELECT * FROM software';
                mysql_select_db($dbname);
                $retval_sub = mysql_query( $sql_sub, $conn ); 
            while($row_sub = mysql_fetch_array($retval_sub, MYSQL_ASSOC)) {

                $sid = $row_sub['sid'];
                $sql_download_count = "SELECT COUNT( * ) AS total FROM download WHERE s_id ='$sid' ";
                mysql_select_db($dbname);
                $retval_download_count = mysql_query( $sql_download_count, $conn ); 
                $count=mysql_fetch_assoc($retval_download_count);

              echo '<div class="col-md-12" style="background-color:#ffffff; padding:10px; height:130px; margin-bottom:25px">
                    <div style="color:#000000;text-align:center; font-size:16px">
                       '.$row_sub['name'].'
                    </div>
                    <div class="progress" style="background-color:#F4F4F4">
                       <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:'.$row_sub['rating'].'%; background-color:#00004F">
                        Rating '.$row_sub['rating'].'%
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">

                                <button type="button" class="btn btn-primary" style="width:100%; background-color:#2B4E6C; border-color:#2B4E6C">Download ('.$count['total'].')</button>
               
                            </div>
                            <div class="col-md-3" style="color:#000000; font-size:20px">
                                <div>
                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><a href="index.php?unlike=0&like=1&id='.$row_sub['sid'].'"><span class="icon-thumbs-up"></span>'.$row_sub['likes'].'</a></button>
                                </div>
                            </div>
                            <div class="col-md-3" style="color:#000000; font-size:20px">
                                <div>
                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><a href="index.php?like=0&unlike=1&id='.$row_sub['sid'].'"><span class="icon-thumbs-down"></span>'.$row_sub['unlike'].'</a></button>
                                </div>
                            </div>

                        </div>
                    </div>
               </div>';
           }
           ?>   
            </div>
        </div>
        </div>
        
    </div>    
    
    <?php
        mysql_close($conn);
    ?>
</body>

<!-- Mirrored from aqvatarius.com/themes/taurus_v12/html/sample_tasks by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2015 03:46:56 GMT -->
</html>