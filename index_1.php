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
    <!-- use jssor.slider.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500.0,d:3000.0,o:-1.0,r:240.0,e:{r:2.0}}],
              [{b:-1.0,d:1.0,o:-1.0,c:{x:51.0,t:-51.0}},{b:0.0,d:1000.0,o:1.0,c:{x:-51.0,t:51.0},e:{o:7.0,c:{x:7.0,t:7.0}}}],
              [{b:-1.0,d:1.0,o:-1.0,sX:9.0,sY:9.0},{b:1000.0,d:1000.0,o:1.0,sX:-9.0,sY:-9.0,e:{sX:2.0,sY:2.0}}],
              [{b:-1.0,d:1.0,o:-1.0,r:-180.0,sX:9.0,sY:9.0},{b:2000.0,d:1000.0,o:1.0,r:180.0,sX:-9.0,sY:-9.0,e:{r:2.0,sX:2.0,sY:2.0}}],
              [{b:-1.0,d:1.0,o:-1.0},{b:3000.0,d:2000.0,y:180.0,o:1.0,e:{y:16.0}}],
              [{b:-1.0,d:1.0,o:-1.0,r:-150.0},{b:7500.0,d:1600.0,o:1.0,r:150.0,e:{r:3.0}}],
              [{b:10000.0,d:2000.0,x:-379.0,e:{x:7.0}}],
              [{b:10000.0,d:2000.0,x:-379.0,e:{x:7.0}}],
              [{b:-1.0,d:1.0,o:-1.0,r:288.0,sX:9.0,sY:9.0},{b:9100.0,d:900.0,x:-1400.0,y:-660.0,o:1.0,r:-288.0,sX:-9.0,sY:-9.0,e:{r:6.0}},{b:10000.0,d:1600.0,x:-200.0,o:-1.0,e:{x:16.0}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

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
<body class="bg-img-num1"> 
    
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
                        <div class="col-md-12">
                            <div class="row">
                                
                                <div class="col-md-12" style="background-color:#ffffff; height:220px; margin-bottom:25px; padding:10px">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div>
                                                    <img src="img/12.jpg" alt="Smiley face" height="100%" width="100%" style="radius:50%">
                                                </div>
                                            </div>
                                            <div class="col-md-8" style="color:#000000; font-size:20px">
                                                <div>
                                                    Adobe photoshop 64 bit original version (with crack)
                                                    <hr>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <button type="button" class="btn btn-primary" style="width:150px; background-color:#2B4E6C; border-color:#2B4E6C">Download</button>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button disabled type="button" class="btn btn-primary" style="width:100%; background-color:#2B4E6C; border-color:#2B4E6C">Free</button>
                                                            </div>
                                
                                                            <div class="col-md-7">
                                                                <div class="progress" style="background-color:#F4F4F4">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; background-color:#00004F">
                                                                        Rating 70%
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="color:#000000; font-size:20px">
                                                <div>
                                                    <button type="button" class="btn btn-primary" style="width:100%px; background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-up"></span>123</button>
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="color:#000000; font-size:20px">
                                                <div>
                                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-down"></span>78</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="color:#000000; padding-top:122px">
                                        <div class="well" style="background-color: rgba(245, 245, 245, 0.48);height: 78px;">Basic Well Basic Wel Basic Wel Basic Wel Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel
                                            Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel
                                            Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel
                                    </div>
                                    </div>

                                </div>
                                
                                <div class="col-md-12" style="background-color:#ffffff; height:220px; margin-bottom:25px; padding:10px">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div>
                                                    <img src="img/12.jpg" alt="Smiley face" height="100%" width="100%" style="radius:50%">
                                                </div>
                                            </div>
                                            <div class="col-md-8" style="color:#000000; font-size:20px">
                                                <div>
                                                    Adobe photoshop 64 bit original version (with crack)
                                                    <hr>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <button type="button" class="btn btn-primary" style="width:150px; background-color:#2B4E6C; border-color:#2B4E6C">Download</button>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button disabled type="button" class="btn btn-primary" style="width:100%; background-color:#2B4E6C; border-color:#2B4E6C">Free</button>
                                                            </div>
                                
                                                            <div class="col-md-7">
                                                                <div class="progress" style="background-color:#F4F4F4">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; background-color:#00004F">
                                                                        Rating 70%
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="color:#000000; font-size:20px">
                                                <div>
                                                    <button type="button" class="btn btn-primary" style="width:100%px; background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-up"></span>123</button>
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="color:#000000; font-size:20px">
                                                <div>
                                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-down"></span>78</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="color:#000000; padding-top:122px">
                                        <div class="well" style="background-color: rgba(245, 245, 245, 0.48);height: 78px;">Basic Well Basic Wel Basic Wel Basic Wel Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel
                                            Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel
                                            Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel
                                    </div>
                                    </div>

                                </div>
                                



                                <div class="col-md-12" style="background-color:#ffffff; height:220px; margin-bottom:25px; padding:10px">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div>
                                                    <img src="img/12.jpg" alt="Smiley face" height="100%" width="100%" style="radius:50%">
                                                </div>
                                            </div>
                                            <div class="col-md-8" style="color:#000000; font-size:20px">
                                                <div>
                                                    Adobe photoshop 64 bit original version (with crack)
                                                    <hr>
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-3">
                                                                <button type="button" class="btn btn-primary" style="width:150px; background-color:#2B4E6C; border-color:#2B4E6C">Download</button>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <button disabled type="button" class="btn btn-primary" style="width:100%; background-color:#2B4E6C; border-color:#2B4E6C">Free</button>
                                                            </div>
                                
                                                            <div class="col-md-7">
                                                                <div class="progress" style="background-color:#F4F4F4">
                                                                    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; background-color:#00004F">
                                                                        Rating 70%
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="color:#000000; font-size:20px">
                                                <div>
                                                    <button type="button" class="btn btn-primary" style="width:100%px; background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-up"></span>123</button>
                                                </div>
                                            </div>
                                            <div class="col-md-1" style="color:#000000; font-size:20px">
                                                <div>
                                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-down"></span>78</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div style="color:#000000; padding-top:122px">
                                        <div class="well" style="background-color: rgba(245, 245, 245, 0.48);height: 78px;">Basic Well Basic Wel Basic Wel Basic Wel Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel
                                            Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel Basic WelBasic Wel Basic Wel Basic Wel Basic Wel
                                            Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel Basic Wel
                                    </div>
                                    </div>

                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                   
                
            </div>
            <div class="col-md-3">
                <div style="background-color:#ffffff">
                
               <div class="col-md-12" style="background-color:#ffffff; padding:10px; height:130px; margin-bottom:25px">
                    <div style="color:#000000;text-align:center; font-size:16px">
                        Adobe photoshop 64 bit original version (with crack)
                    </div>
                    <div class="progress" style="background-color:#F4F4F4">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; background-color:#00004F">
                            Rating 70%
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">

                                <button type="button" class="btn btn-primary" style="width:100%; background-color:#2B4E6C; border-color:#2B4E6C">Download (2356)</button>
               
                            </div>
                            <div class="col-md-3" style="color:#000000; font-size:20px">
                                <div>
                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-down"></span>1278</button>
                                </div>
                            </div>
                            <div class="col-md-3" style="color:#000000; font-size:20px">
                                <div>
                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-down"></span>1378</button>
                                </div>
                            </div>

                        </div>
                    </div>
               </div>
               


               <div class="col-md-12" style="background-color:#ffffff; padding:10px; height:130px; margin-bottom:25px">
                    <div style="color:#000000;text-align:center; font-size:16px">
                        Adobe photoshop 64 bit original version (with crack)
                    </div>
                    <div class="progress" style="background-color:#F4F4F4">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; background-color:#00004F">
                            Rating 70%
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">

                                <button type="button" class="btn btn-primary" style="width:100%; background-color:#2B4E6C; border-color:#2B4E6C">Download (2356)</button>
               
                            </div>
                            <div class="col-md-3" style="color:#000000; font-size:20px">
                                <div>
                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-down"></span>1278</button>
                                </div>
                            </div>
                            <div class="col-md-3" style="color:#000000; font-size:20px">
                                <div>
                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-down"></span>1378</button>
                                </div>
                            </div>

                        </div>
                    </div>
               </div>
               

               <div class="col-md-12" style="background-color:#ffffff; padding:10px; height:130px; margin-bottom:25px">
                    <div style="color:#000000;text-align:center; font-size:16px">
                        Adobe photoshop 64 bit original version (with crack)
                    </div>
                    <div class="progress" style="background-color:#F4F4F4">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; background-color:#00004F">
                            Rating 70%
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">

                                <button type="button" class="btn btn-primary" style="width:100%; background-color:#2B4E6C; border-color:#2B4E6C">Download (2356)</button>
               
                            </div>
                            <div class="col-md-3" style="color:#000000; font-size:20px">
                                <div>
                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-down"></span>1278</button>
                                </div>
                            </div>
                            <div class="col-md-3" style="color:#000000; font-size:20px">
                                <div>
                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-down"></span>1378</button>
                                </div>
                            </div>

                        </div>
                    </div>
               </div>
              

              <div class="col-md-12" style="background-color:#ffffff; padding:10px; height:130px; margin-bottom:25px">
                    <div style="color:#000000;text-align:center; font-size:16px">
                        Adobe photoshop 64 bit original version (with crack)
                    </div>
                    <div class="progress" style="background-color:#F4F4F4">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%; background-color:#00004F">
                            Rating 70%
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">

                                <button type="button" class="btn btn-primary" style="width:100%; background-color:#2B4E6C; border-color:#2B4E6C">Download (2356)</button>
               
                            </div>
                            <div class="col-md-3" style="color:#000000; font-size:20px">
                                <div>
                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-down"></span>1278</button>
                                </div>
                            </div>
                            <div class="col-md-3" style="color:#000000; font-size:20px">
                                <div>
                                    <button type="button" class="btn btn-primary" style="width:100%px;background-color:#2B4E6C; border-color:#2B4E6C"><span class="icon-thumbs-down"></span>1378</button>
                                </div>
                            </div>

                        </div>
                    </div>
               </div>
               <div class="col-md-12" style="background-color:#ffffff; height:120px; margin-bottom:25px">
               </div>
               <div class="col-md-12" style="background-color:#ffffff; height:120px; margin-bottom:25px">
               </div>
               <div class="col-md-12" style="background-color:#ffffff; height:120px; margin-bottom:25px">
               </div>
               <div class="col-md-12" style="background-color:#ffffff; height:120px; margin-bottom:25px">
               </div>
               

                
            </div>
        </div>
        </div>
        
    </div>    
    
    
</body>

<!-- Mirrored from aqvatarius.com/themes/taurus_v12/html/sample_tasks by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Oct 2015 03:46:56 GMT -->
</html>