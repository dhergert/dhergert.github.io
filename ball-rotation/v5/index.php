<?php
header('Cache-Control: max-age=3600');
?>
<html>

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-FL30KPC7Q4"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());
    gtag("config", "G-FL30KPC7Q4");
  </script>

  <style>
    body {
      font-family: Calibri, 'Trebuchet MS', sans-serif;
      padding: 0;
      margin: 0;
    }

    .header {
      padding: 5px;
    }

    .left-item {
      float: left;
    }

    .right-item {
      float: right;
    }

    .main {
      padding: 5px;
      font-size: 12px;
      clear: both;
    }

    svg {
      padding: 0;
    }

    @media print {
      .hide-on-print {
        visibility: hidden;
      }

      .print-size {
        width: 100%;
      }
    }
  </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>

  <div class="header">
    <div class="left-item">
      <h2>Ball Rotation</h2>
    </div>

    <div class="right-item">
      <span style="font-size: 0.5em">version 2023.8.16 (v5)</span>
    </div>
  </div>

  <div class="main">
    The different zones define, when the ball becomes dead in that area, the expectations of who would be responsible for fetching the ball (either existing or new) and who would be responsible for spotting the ball.
    <br /><br />
    The yard lines are meant to be approximate, so the boundries where the CJ and U or R and U would fetch the ball is something that the 3 officials establish through reading what the other is doing and gaining a feel for when to fetch vs when to spot. The short wing and deep wing officials should still be ready to participate in ball rotation if the situation warrants it.

    <!-- https://imagemapper.noc.io/#/result -->
    <div class="hide-on-print"><br />Hover over the different zones with your mouse (or touch on mobile device) to see the expected movements. Any questions or suggestions, please reach out to Dave Hergert.</div>
    <div style="text-align: center; padding: 0; margin: 0;">
      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1775 1265" height="700px" class="print-size" id="svgMap">
        <image width="1775" height="1265" xlink:href="football-img.php?0" id="svgImage"></image>
        <rect x="159" y="329" fill="#fff" opacity="0" width="229" height="736" id="football-img.php?1"></rect>

        <rect x="160" y="95" fill="#fff" opacity="0" width="714" height="220" id="football-img.php?2"></rect>
        <rect x="165" y="210" fill="#fff" opacity="0" width="343" height="95" id="football-img.php?2-1"></rect>
        <rect x="520" y="210" fill="#fff" opacity="0" width="347" height="95" id="football-img.php?2-2"></rect>

        <rect x="887" y="95" fill="#fff" opacity="0" width="726" height="220" id="football-img.php?3"></rect>
        <rect x="898" y="210" fill="#fff" opacity="0" width="343" height="95" id="football-img.php?3-1"></rect>
        <rect x="1253" y="210" fill="#fff" opacity="0" width="347" height="95" id="football-img.php?3-2"></rect>

        <rect x="1381" y="327" fill="#fff" opacity="0" width="230" height="740" id="football-img.php?4"></rect>
        <rect x="1111" y="814" fill="#fff" opacity="0" width="260" height="252" id="football-img.php?5"></rect>
      </svg>
    </div>
  </div>



  <script>
    $("#svgMap rect").hover(
      function() {
        var img = document.getElementById("svgImage");
        img.setAttributeNS("http://www.w3.org/1999/xlink", "xlink:href", this.id);
      },
      function() {
        var img = document.getElementById("svgImage");
        img.setAttributeNS("http://www.w3.org/1999/xlink", "xlink:href", "football-img.php?0");
      }
    );

    // preload images
    var images = [];
    for (var i = 0; i <= 5; i++) {
      console.log('Preloading image for zone ' + i)

      images[i] = new Image();
      images[i].src = "football-img.php?" + i;

      if (i == 2 || i == 3) {
        console.log('Preloading sub-images for zone ' + i)
        images[i + 10] = new Image();
        images[i + 11] = new Image();
        images[i + 10].src = "football-img.php?" + i + "-1";
        images[i + 11].src = "football-img.php?" + i + "-2";

      }
    }
  </script>
</body>

</html>