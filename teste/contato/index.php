<?php 
  $a = "contato";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HLS Arquitetura e Design</title>
        <meta name="description" content="">
<!--         <meta name="viewport" content="width=device-width, initial-scale=1">
 -->
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

      <link rel="stylesheet" href="../css/normalize.css">
      <link rel="stylesheet" href="../css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
       <?php include_once "../includes/menu.php"; ?>

        <section class="left in">
          <div class="grid">
            <div class="gridLine"></div>
            <div class="gridLine"></div>
            <div class="gridLine"></div>
          </div>
          <div class="content">
            <div class="itemGrid">
                <h1>CONTATO</h1>
            </div>
            <div class="contentIn">
              <div  class="clearfix">
                <div class="thirty">
                    <strong>Telefone</strong>
                    <a href="tel://05181919108">
                      051 8191.9108
                    </a>
                </div>
                <div class="thirty">
                  <strong>Email</strong>
                  <a href="mailto:hsl.arquitetura@gmail.com">hsl.arquitetura@gmail.com</a>
                </div>
                <div class="thirty">
                   <strong>Endereço</strong>
                   <a href="https://www.google.com.br/maps/place/R.+Mariante,+180+-+Rio+Branco,+RS,+90430-180/@-30.0292487,-51.2043273,15z/data=!4m2!3m1!1s0x951979b441e6a307:0x4b7926ddeaa08f?sa=X&ei=oYc5VKCXHIiQNriegcgP&ved=0CB4Q8gEwAA" target="_blank">
                    Rua Mariante, 180<br>Porto Alegre - RS</a>
                </div>
              </div>
              <div class="contactMap" id="contactMap">
                <iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/thommorais.icc83p2f/attribution.html?access_token=pk.eyJ1IjoidGhvbW1vcmFpcyIsImEiOiJUZkRQMncwIn0.eO4uClGArIA6GK4xanhbSw'></iframe>   
              </div>
            </div>
          </div>
        </section>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
      <script src="../js/plugins.js"></script>
      <script src="../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
