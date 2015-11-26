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

    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
    <script type="text/javascript" src="js/new_js.js"></script>


    <style>
        
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('slimg/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('slimg/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>
	
</head>
<body class="bg-img-num1" style="background-color:#082648"> 

    <?php
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "software_store";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password , $dbname);
       
       if(! $conn )
       {
          die('Could not connect: ' . mysql_error());
       }

       if (isset ($_GET['Download'])) {
        $s_id = $_GET['Download']; 
        $date = date("Y-m-d h:i:sa");
        $sql_download = "INSERT INTO download(user_id,s_id,date) VALUES (3,'$s_id','$date')";
        //mysql_select_db($dbname);
        $retval = mysqli_query( $conn , $sql_download );
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
            //mysql_select_db($dbname);
            $retval = mysqli_query( $conn , $sql_like );
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
            //mysqli_select_db($dbname);
            $retval = mysqli_query( $conn , $sql_unlike);
            if(! $retval ){
               die('Could not update data: ' . mysql_error());
            }else{
               header("Location: index.php");
               exit();
            }
        }
       }

       $sql = 'SELECT * FROM software';
       //mysql_select_db($dbname);
       $retval = mysqli_query( $conn , $sql);
       
       if(! $retval )
       {
          die('Could not get data: ' . mysql_error());
       }
       
    ?>
            
        <div class="row">                   
            <div class="col-md-12">
                
                 <nav class="navbar brb" role="navigation">
                    <div class="navbar-header" style="padding-top: 8px;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-reorder"></span>                            
                        </button>                                                
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#" id='User-img'  ></a> 
						<ul class="dropdown-menu animated fadeInRight m-t-xs">
							<li><a href="#" id='userName'></a></li>
							<li class="divider"></li>
							<li>
								<a id="Login-out" href="#" onclick="loginOut()">
									Login Out
								</a>
							</li>
						</ul>                                                                                    
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">                                     
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">
                                    <span class="icon-home"></span> softwarestore.lk
                                </a>
                            </li>                                                    
                        </ul>
                                                                  
                    </div>
                </nav>               

            </div>            
        </div>

        <!-- slider start-->

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
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <!-- bullet navigator item prototype -->
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <a href="http://www.jssor.com" style="display:none">Bootstrap Carousel</a>
    </div>

    <!-- slider end -->



        <div class="container" >
        
        <div class="row">
            <div class="col-md-9">
                <div class="block block-transparent nm">
                    <div class="content controls">
                        <div class="form-row">
                            <div class="col-md-3">
                                <select class="form-control">
                                    <option>All Software</option>
                                    <option>Business</option> 
                                    <option>Weather</option>
                                    <option>Office</option>
                                    <option>Games</option>
                                    <option>Entertainment</option>
                                    <option>Tools</option>

 
                                    <option>Health and fitness</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <div class="input-group-addon"><span class="icon-search"></span></div>
                                    <input class="form-control" placeholder="search by software name"/>
                                </div>
                            </div>
                            <div class="col-md-3">
                                
                            </div>                            
                        </div>
                    </div>
                </div>

               
                

                <div class="block block-transparent">
                    <div class="container">
        <?php 
        $userID = $_SESSION['userID'];
        while($row = mysqli_fetch_array($retval, MYSQL_ASSOC)) {
                  echo'<div class="col-md-12" style="padding-top:15px">
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
                                                                <button type="button" class="btn btn-primary" style="width:150px; background-color:#2B4E6C; border-color:#2B4E6C" onclick="window.location.reload();"><a href="download.php?userID='.$userID.'&Download='.$row['sid'].'&link='.$row['link'].'" target="_blank" "); ">Download</a></button>
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
       

        ?>
                    </div>
                </div>
                   
                
            </div>
            <div class="col-md-3" style="padding-top:60px">

                <h3>My Downloads</h3>

                <div style="background-color:#ffffff">
               </div>

            <?php
                $userID = $_SESSION['userID'];
                
                $sql_soft = "SELECT * FROM download WHERE user_id = '$userID'";
                //mysql_select_db($dbname);
                $retval_soft = mysqli_query( $conn , $sql_soft); 
            while($row_soft = mysqli_fetch_array($retval_soft , MYSQL_ASSOC)) {
                $soft_id = $row_soft['s_id'];
                $sql_sub = "SELECT * FROM software WHERE sid = '$soft_id'";
                $retval_sub = mysqli_query( $conn , $sql_sub); 
                $row_sub = mysqli_fetch_array($retval_sub, MYSQL_ASSOC);

                //$sid = $row_sub['sid'];
                //$sql_download_count = "SELECT COUNT( * ) AS total FROM download WHERE s_id ='$sid' ";
                //mysqli_select_db($dbname);
                //$retval_download_count = mysqli_query( $conn , $sql_download_count ); 
                //$count=mysqli_fetch_assoc($retval_download_count);

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

                                <button type="button" class="btn btn-primary" style="width:100%; background-color:#2B4E6C; border-color:#2B4E6C">Download ()</button>
               
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
        
    </div>    
    
    <?php
        mysqli_close($conn);
    ?>
	<script>
		if(localStorage.isAuthenticated){
			if (localStorage.FB_user_id) {
				document.getElementById('User-img').innerHTML = '<img class="img-responsive img-circle" src="http://graph.facebook.com/' + localStorage.FB_user_id + '/picture" width="30" height="30"/>';
			}
			else if (localStorage.Google_user_id) {
				document.getElementById('User-img').innerHTML = '<img class="img-responsive img-circle" src="' + localStorage.imgURL + '" width="30" height="30"/>';
			}
			document.getElementById('userName').innerHTML = localStorage.user_name;

			function loginOut() {
				localStorage.clear();
				window.location.href = 'login.html';
			}

		}
		else{
			window.location.href = 'login.html';
		}
	</script>
</body>

<!-- Mirrored from aqvatarius.com/themes/taurus_v12/html/sample_tasks by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2015 03:46:56 GMT -->
</html>