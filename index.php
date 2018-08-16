<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="refresh" content="10;URL=http://192.168.25.100">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Controle Aquário </title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="css/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="css/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="css/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <?php
       
       if($_GET['gpiorston']) {fungpiorston();}

       if($_GET['esp1on']) {funesp1on();}
       if($_GET['esp2on']) {funesp2on();}
       if($_GET['esp3on']) {funesp3on();}
       if($_GET['esp4on']) {funesp4on();}
       if($_GET['esp5on']) {funesp5on();}
       if($_GET['esp6on']) {funesp6on();}
       if($_GET['esp7on']) {funesp7on();}
       if($_GET['esp8on']) {funesp8on();}

       if($_GET['esp1off']) {funesp1off();}
       if($_GET['esp2off']) {funesp2off();}
       if($_GET['esp3off']) {funesp3off();}
       if($_GET['esp4off']) {funesp4off();}
       if($_GET['esp5off']) {funesp5off();}
       if($_GET['esp6off']) {funesp6off();}
       if($_GET['esp7off']) {funesp7off();}
       if($_GET['esp8off']) {funesp8off();}

       if($_GET['gpio0on']) {fungpio0on();}
       if($_GET['gpio1on']) {fungpio1on();}
       if($_GET['gpio2on']) {fungpio2on();}
       if($_GET['gpio3on']) {fungpio3on();}
       if($_GET['gpio4on']) {fungpio4on();}

       if($_GET['gpio1bon']) {fungpio1bon();}
       if($_GET['gpio2bon']) {fungpio2bon();}
       if($_GET['gpio3bon']) {fungpio3bon();}
       if($_GET['gpio4bon']) {fungpio4bon();}
       if($_GET['gpio5bon']) {fungpio5bon();}
       if($_GET['gpio6bon']) {fungpio6bon();}
       if($_GET['gpio7bon']) {fungpio7bon();}
       if($_GET['gpio8bon']) {fungpio8bon();}
       
       if($_GET['gpio1aon']) {fungpio1aon();}
       if($_GET['gpio2aon']) {fungpio2aon();}
       if($_GET['gpio3aon']) {fungpio3aon();}
       if($_GET['gpio4aon']) {fungpio4aon();}
       if($_GET['gpio5aon']) {fungpio5aon();}
       if($_GET['gpio6aon']) {fungpio6aon();}
       if($_GET['gpio7aon']) {fungpio7aon();}
       if($_GET['gpio8aon']) {fungpio8aon();}
       
       if($_GET['gpiorstoff']){fungpiorstoff();}

       if($_GET['gpio0off']){fungpio0off();}
       if($_GET['gpio1off']){fungpio1off();}
       if($_GET['gpio2off']){fungpio2off();}
       if($_GET['gpio3off']){fungpio3off();}
       if($_GET['gpio4off']){fungpio4off();}

       if($_GET['gpio1boff']){fungpio1boff();}
       if($_GET['gpio2boff']){fungpio2boff();}
       if($_GET['gpio3boff']){fungpio3boff();}
       if($_GET['gpio4boff']){fungpio4boff();}
       if($_GET['gpio5boff']){fungpio5boff();}
       if($_GET['gpio6boff']){fungpio6boff();}
       if($_GET['gpio7boff']){fungpio7boff();}
       if($_GET['gpio8boff']){fungpio8boff();}
       
       if($_GET['gpio1aoff']){fungpio1aoff();}
       if($_GET['gpio2aoff']){fungpio2aoff();}
       if($_GET['gpio3aoff']){fungpio3aoff();}
       if($_GET['gpio4aoff']){fungpio4aoff();}
       if($_GET['gpio5aoff']){fungpio5aoff();}
       if($_GET['gpio6aoff']){fungpio6aoff();}
       if($_GET['gpio7aoff']){fungpio7aoff();}
       if($_GET['gpio8aoff']){fungpio8aoff();}
             
       function fungpiorston() { shell_exec("/var/www/html/GPIO/restart.sh  "); }

       function funesp1on() { shell_exec("echo 'ON' > GPIO/esp_1.txt"); }
       function funesp2on() { shell_exec("echo 'ON' > GPIO/esp_2.txt"); }
       function funesp3on() { shell_exec("echo 'ON' > GPIO/esp_3.txt"); }
       function funesp4on() { shell_exec("echo 'ON' > GPIO/esp_4.txt"); }
       function funesp5on() { shell_exec("echo 'ON' > GPIO/esp_5.txt"); }
       function funesp6on() { shell_exec("echo 'ON' > GPIO/esp_6.txt"); }
       function funesp7on() { shell_exec("echo 'ON' > GPIO/esp_7.txt"); }
       function funesp8on() { shell_exec("echo 'ON' > GPIO/esp_8.txt"); }

       function funesp1off() { shell_exec("echo 'OFF' > GPIO/esp_1.txt"); }
       function funesp2off() { shell_exec("echo 'OFF' > GPIO/esp_2.txt"); }
       function funesp3off() { shell_exec("echo 'OFF' > GPIO/esp_3.txt"); }
       function funesp4off() { shell_exec("echo 'OFF' > GPIO/esp_4.txt"); }
       function funesp5off() { shell_exec("echo 'OFF' > GPIO/esp_5.txt"); }
       function funesp6off() { shell_exec("echo 'OFF' > GPIO/esp_6.txt"); }
       function funesp7off() { shell_exec("echo 'OFF' > GPIO/esp_7.txt"); }
       function funesp8off() { shell_exec("echo 'OFF' > GPIO/esp_8.txt"); }

       function fungpio0on() { shell_exec("echo 'ON' > GPIO/gpio_0_11.txt"); }
       function fungpio1on() { shell_exec("echo 'ON' > GPIO/gpio_1_12.txt"); }
       function fungpio2on() { shell_exec("echo 'ON' > GPIO/gpio_2_13.txt"); }
       function fungpio3on() { shell_exec("echo 'ON' > GPIO/gpio_3_15.txt"); }
       function fungpio4on() { shell_exec("echo 'ON' > GPIO/gpio_4_16.txt"); }
       function fungpio5on() { shell_exec("echo 'ON' > GPIO/gpio_5_18.txt"); }

       function fungpio1bon() { shell_exec("echo 'ON' > GPIO/relay_b_01.txt"); }
       function fungpio2bon() { shell_exec("echo 'ON' > GPIO/relay_b_02.txt"); }
       function fungpio3bon() { shell_exec("echo 'ON' > GPIO/relay_b_03.txt"); }
       function fungpio4bon() { shell_exec("echo 'ON' > GPIO/relay_b_04.txt"); }
       function fungpio5bon() { shell_exec("echo 'ON' > GPIO/relay_b_05.txt"); }
       function fungpio6bon() { shell_exec("echo 'ON' > GPIO/relay_b_06.txt"); }
       function fungpio7bon() { shell_exec("echo 'ON' > GPIO/relay_b_07.txt"); }
       function fungpio8bon() { shell_exec("echo 'ON' > GPIO/relay_b_08.txt"); }
       
       function fungpio1aon() { shell_exec("echo 'ON' > GPIO/relay_a_01.txt"); }
       function fungpio2aon() { shell_exec("echo 'ON' > GPIO/relay_a_02.txt"); }
       function fungpio3aon() { shell_exec("echo 'ON' > GPIO/relay_a_03.txt"); }
       function fungpio4aon() { shell_exec("echo 'ON' > GPIO/relay_a_04.txt"); }
       function fungpio5aon() { shell_exec("echo 'ON' > GPIO/relay_a_05.txt"); }
       function fungpio6aon() { shell_exec("echo 'ON' > GPIO/relay_a_06.txt"); }
       function fungpio7aon() { shell_exec("echo 'ON' > GPIO/relay_a_07.txt"); }
       function fungpio8aon() { shell_exec("echo 'ON' > GPIO/relay_a_08.txt"); }
       
       function fungpiorstoff(){ shell_exec("/var/www/html/GPIO/restart.sh  "); }

       function fungpio0off(){ shell_exec("echo 'OFF' > GPIO/gpio_0_11.txt"); }
       function fungpio1off(){ shell_exec("echo 'OFF' > GPIO/gpio_1_12.txt"); }
       function fungpio2off(){ shell_exec("echo 'OFF' > GPIO/gpio_2_13.txt"); }
       function fungpio3off(){ shell_exec("echo 'OFF' > GPIO/gpio_3_15.txt"); }
       function fungpio4off(){ shell_exec("echo 'OFF' > GPIO/gpio_4_16.txt"); }
       function fungpio5off(){ shell_exec("echo 'OFF' > GPIO/gpio_5_18.txt"); }

       function fungpio1boff(){ shell_exec("echo 'OFF' > GPIO/relay_b_01.txt"); }
       function fungpio2boff(){ shell_exec("echo 'OFF' > GPIO/relay_b_02.txt"); }
       function fungpio3boff(){ shell_exec("echo 'OFF' > GPIO/relay_b_03.txt"); }
       function fungpio4boff(){ shell_exec("echo 'OFF' > GPIO/relay_b_04.txt"); }
       function fungpio5boff(){ shell_exec("echo 'OFF' > GPIO/relay_b_05.txt"); }
       function fungpio6boff(){ shell_exec("echo 'OFF' > GPIO/relay_b_06.txt"); }
       function fungpio7boff(){ shell_exec("echo 'OFF' > GPIO/relay_b_07.txt"); }
       function fungpio8boff(){ shell_exec("echo 'OFF' > GPIO/relay_b_08.txt"); }
       
       function fungpio1aoff(){ shell_exec("echo 'OFF' > GPIO/relay_a_01.txt"); }
       function fungpio2aoff(){ shell_exec("echo 'OFF' > GPIO/relay_a_02.txt"); }
       function fungpio3aoff(){ shell_exec("echo 'OFF' > GPIO/relay_a_03.txt"); }
       function fungpio4aoff(){ shell_exec("echo 'OFF' > GPIO/relay_a_04.txt"); }
       function fungpio5aoff(){ shell_exec("echo 'OFF' > GPIO/relay_a_05.txt"); }
       function fungpio6aoff(){ shell_exec("echo 'OFF' > GPIO/relay_a_06.txt"); }
       function fungpio7aoff(){ shell_exec("echo 'OFF' > GPIO/relay_a_07.txt"); }
       function fungpio8aoff(){ shell_exec("echo 'OFF' > GPIO/relay_a_08.txt"); }
       
       
    ?>
   <div class="container body">
      <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
              <span class="count_top"> Temp. Aquario</span>
              <div class="count green">  
                 <?php
                    //File to read to get temperature aquarium
                    $file = '/sys/devices/w1_bus_master1/28-0117b32e70ff/w1_slave';
                    //Read the file line by line
                    $lines = file($file);
                    //Get the temp from second line
                    $temp = explode('=', $lines[1]);
                    //Setup some nice formatting (i.e., 21,3)
                    $temp = number_format($temp[1] / 1000, 1,',', '');
                    //And echo that temp
                    echo $temp;
                  ?>
              </div>
              <span class="count_botton">File</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
              <span class="count_top">Temp. SUMP</span>
              <div class="count green">  
                 <?php
                    //File to read to get temperature aquarium
                    $file = '/sys/devices/w1_bus_master1/28-0517c46481ff/w1_slave';
                    //Read the file line by line
                    $lines = file($file);
                    //Get the temp from second line
                    $temp = explode('=', $lines[1]);
                    //Setup some nice formatting (i.e., 21,3)
                    $temp = number_format($temp[1] / 1000, 1,',', '');
                    //And echo that temp
                    echo $temp;
                  ?>
               </div>
               <span class="count_botton">File</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
              <span class="count_top">Temp. SUMP</span>
              <div class="count green">  
                 <?php
                    //File to read to get temperature aquarium
                    $file = '/sys/bus/w1/devices/28-02148145d4ff/w1_slave';
                    //Read the file line by line
                    $lines = file($file);
                    //Get the temp from second line
                    $temp = explode('=', $lines[1]);
                    //Setup some nice formatting (i.e., 21,3)
                    $temp = number_format($temp[1] / 1000, 1,',', '');
                    //And echo that temp
                    echo $temp;
                  ?>
               </div>
               <span class="count_botton">File</span>
            </div>


            <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
                 <span class="count_top">Lampada<BR>Branca</span>
                 <div class="count blue">
                     <?php      $button01 = exec("cat GPIO/gpio_0_11.txt");
                            if ($button01 == "OFF" ) { echo '<button id="btngpio00" name="btngpio00" onClick=location.href="?gpio0on=on">OFF</button>'; }
                            if ($button01 == "ON"  ) { echo '<button id="btngpio00" name="btngpio00" onClick=location.href="?gpio0off=off">ON</button>'; } ?>
                 </div>
                 <span class="count_botton">GPIO 0_11</span>
             </div>
             <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
                 <span class="count_top">Lampada<BR>Amarela</span>
                 <div class="count blue">
                     <?php      $button01 = exec("cat GPIO/gpio_1_12.txt");
                            if ($button01 == "OFF" ) { echo '<button id="btngpio01" name="btngpio01" onClick=location.href="?gpio1on=on">OFF</button>'; }
                            if ($button01 == "ON"  ) { echo '<button id="btngpio01" name="btngpio01" onClick=location.href="?gpio1off=off">ON</button>'; } ?>
                 </div>
                 <span class="count_botton">GPIO 1_12</span>
             </div>
             <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
                 <span class="count_top">Lampada<BR>Forte</span>
                 <div class="count blue">
                     <?php      $button02 = exec("cat GPIO/gpio_2_13.txt");
                            if ($button02 == "OFF" ) { echo '<button id="btngpio02" name="btngpio02" onClick=location.href="?gpio2on=on">OFF</button>'; }
                            if ($button02 == "ON"  ) { echo '<button id="btngpio02" name="btngpio02" onClick=location.href="?gpio2off=off">ON</button>'; } ?>
                 </div>
                 <span class="count_botton">GPIO 2_13</span>
             </div>
             <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
                 <span class="count_top">Bomba<BR>K1</span>
                 <div class="count blue">
                     <?php      $button03 = exec("cat GPIO/gpio_3_15.txt");
                            if ($button03 == "OFF" ) { echo '<button id="btngpio03" name="btngpio03" onClick=location.href="?gpio3on=on">OFF</button>'; }
                            if ($button03 == "ON"  ) { echo '<button id="btngpio03" name="btngpio03" onClick=location.href="?gpio3off=off">ON</button>'; } ?>
                 </div>
                 <span class="count_botton">GPIO 3_15</span>
             </div>
             <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
                 <span class="count_top">Bomba<BR>Aquario</span>
                 <div class="count blue">
                     <?php      $button04 = exec("cat GPIO/esp_4.txt");
                            if ($button04 == "OFF" ) { echo '<button id="btesp04" name="btesp04" onClick=location.href="?esp4on=on">OFF</button>'; }
                            if ($button04 == "ON"  ) { echo '<button id="btesp04" name="btesp04" onClick=location.href="?esp4off=off">ON</button>'; } ?>
                 </div>
                 <span class="count_botton">ESP 4</span>
             </div>
             
             <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
                 <span class="count_top">Aquecedor<BR>SUMP</span>
                 <div class="count blue">
                     <?php      $button08 = exec("cat GPIO/esp_5.txt");
                            if ($button08 == "OFF" ) { echo '<button id="btesp05" name="btesp05" onClick=location.href="?esp5on=on">OFF</button>'; }
                            if ($button08 == "ON"  ) { echo '<button id="btesp05" name="btesp05" onClick=location.href="?esp5off=off">ON</button>'; } ?>
                 </div>
                 <span class="count_botton">ESP 5</span>
             </div>
             
             <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
                 <span class="count_top">Aquecedor<BR>Aqua</span>
                 <div class="count blue">
                     <?php      $button05 = exec("cat GPIO/esp_2.txt");
                            if ($button05 == "OFF" ) { echo '<button id="btesp02" name="btesp02" onClick=location.href="?esp2on=on">OFF</button>'; }
                            if ($button05 == "ON"  ) { echo '<button id="btesp02" name="btesp02" onClick=location.href="?esp2off=off">ON</button>'; } ?>
                 </div>
                 <span class="count_botton">ESP 2</span>
             </div>
             <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
                 <span class="count_top">Lampada<BR>UV</span>
                 <div class="count blue">
                     <?php      $button07 = exec("cat GPIO/esp_1.txt");
                            if ($button07 == "OFF" ) { echo '<button id="btesp01" name="btesp01" onClick=location.href="?esp1on=on">OFF</button>'; }
                            if ($button07 == "ON"  ) { echo '<button id="btesp01" name="btesp01" onClick=location.href="?esp1off=off">ON</button>'; } ?>
                 </div>
                 <span class="count_botton">ESP 1</span>
             </div>
             <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
                 <span class="count_top">Lampada<BR>Full   </span>
                 <div class="count blue">
                     <?php      $button08 = exec("cat GPIO/esp_6.txt");
                            if ($button08 == "OFF" ) { echo '<button id="btesp06" name="btesp06" onClick=location.href="?esp6on=on">OFF</button>'; }
                            if ($button08 == "ON"  ) { echo '<button id="btesp06" name="btesp06" onClick=location.href="?esp6off=off">ON</button>'; } ?>
                 </div>
                 <span class="count_botton">ESP 6</span>
             </div>
             
             <div class="col-md-2 col-sm-4 col-xs-3 tile_stats_count">
                 <span class="count_top">Aerador<BR>Aquario</span>
                 <div class="count blue">
                     <?php      $button09 = exec("cat GPIO/esp_7.txt");
                            if ($button09 == "OFF" ) { echo '<button id="btesp07" name="btesp07" onClick=location.href="?esp7on=on">OFF</button>'; }
                            if ($button09 == "ON"  ) { echo '<button id="btesp07" name="btesp07" onClick=location.href="?esp7off=off">ON</button>'; } ?>
                 </div>
                 <span class="count_botton">ESP 7</span>
             </div>
             


          </div>
 
          <!-- /top tiles -->

          
          <br />

        </div>
        <!-- /page content -->

      </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="js/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="js/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="js/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="js/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="js/skycons.js"></script>
    <!-- Flot -->
    <script src="js/jquery.flot.js"></script>
    <script src="js/jquery.flot.pie.js"></script>
    <script src="js/jquery.flot.time.js"></script>
    <script src="js/jquery.flot.stack.js"></script>
    <script src="js/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="js/jquery.flot.orderBars.js"></script>
    <script src="js/jquery.flot.spline.min.js"></script>
    <script src="js/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="js/date.js"></script>
    <!-- JQVMap -->
    <script src="js/jquery.vmap.js"></script>
    <script src="js/jquery.vmap.world.js"></script>
    <script src="js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
	
  </body>
</html>
