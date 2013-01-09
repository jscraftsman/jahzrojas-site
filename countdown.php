<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Jahz Rojas | Social Media Design Guru</title>
        <link rel="stylesheet" href="css/jbclock.css" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
        <script type="text/javascript" src="js/jbclock.js"></script>
        <?php
            /* Set start and end dates here */
            $startDate  = strtotime("11 December 2012 12:00:00");
            $endDate    = strtotime("11 January 2013 12:00:00");
            /* /Set start and end dates here */
        ?>
        <script type="text/javascript">
            $(document).ready(function(){
                JBCountDown({
                    secondsColor : "#ffdc50",
                    minutesColor : "#9cdb7d",
                    hoursColor   : "#378cff",
                    daysColor    : "#ff6565",
                    
                    startDate   : "<?php echo $startDate; ?>",
                    endDate     : "<?php echo $endDate; ?>",
                    now         : "<?php echo strtotime('now'); ?>",
                    seconds     : "<?php echo date('s'); ?>"
                });
            });
        </script>
    </head>
    <body>
        
        <div class="wrapper">
        <h1>This website is under construction!</h1>
        <h4>We will be live in:</h4>
        <div class="clock">
            <!-- Days -->
            <div class="clock_days">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_days" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_days">Days</p>
                    </div>
                </div>
            </div>
            <!-- Days -->
            <!-- Hours -->
            <div class="clock_hours">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_hours" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_hours">Hours</p>
                    </div>
                </div>
            </div>
            <!-- Hours -->
            <!-- Minutes -->
            <div class="clock_minutes">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_minutes" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_minutes">Minutes</p>
                    </div>
                </div>
            </div>
            <!-- Minutes -->
            <!-- Seconds -->
            <div class="clock_seconds">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_seconds" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_seconds">Seconds</p>
                    </div>
                </div>
            </div>
            <!-- Seconds -->
        </div>
        <div class="divider">
       	  <p>In the meantime why dont follow us on <a href="https://twitter.com/imjahz">Twitter?</a></p>
        </div>
        </div><!--/wrapper-->
    </body>
</html>