<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>EuroAmerica Parts and Engines, Freezone Aruba VBA</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <header>
      <a href="index.html"><img src="images/logo.png" width="200px" id="logo"></a>
      <a href="productos.php?tipoPro=0" class="lang">Español <img src="images/spanish.png" width="25px" id="lan"></a>
      <h2>DIESEL ENGINES AND PARTS <br>FOR MARINE, INDUSTRIAL AND HEAVY EQUIPMENT.</h2>
    </header>
    <nav>
      <ul>
        <a href="index.html"><li style="background-image: none">Home</li></a>
        <a href="about.html"><li>About Us</li></a>
        <a href="products.php?tipoPro=0"><li>Products</li></a>
        <a href="manufacturing.html"><li>Manufacturing</li></a>
        <a href="quotation.php"><li>Request for Quotation</li></a>
        <a href="contact.php"><li>Contact us</li></a>
      </ul>
    </nav>
    <section>
      <a name="a"></a>
      <aside class="aside3">
        <h2><img src="images/flecha.png" width="30px" height="30px"> &nbsp;Products</h2>
        <div>
          <ul class="listpro">
            <li><span>&#9658;</span><a href="?tipoPro=0"> Overhaul Kits</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=1"> Undercarriage</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=2"> Track roller</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=3"> Carrier roller</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=4"> Sprocket</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=5"> Idler</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=6"> Steel track Assly</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=7"> Rubber track Assly</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=8"> Track shoe</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=9"> Track link assly</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=10"> Chassis assly</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=11"> Bucket</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=12"> Graber bucket</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=13"> Teeth and adapter</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=14"> Ripper</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=15"> Side cutter</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=16"> Cutting blade and edge</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=17"> Breaking hammer</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=18"> Slewing</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=19"> Pump, cylinder & Valve</a></li>
            <li><span>&#9658;</span><a href="?tipoPro=20"> Others</a></li>
          </ul>
        </div>
      </aside>
      <article class="article3">
        <?php
          if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="0" )
          {
            echo "<h2>Overhaul Kits</h2>";
            echo "<p>We supply kits for most european, american and japanese diesel engines for marine, heavy equipment or industrial. Hard to find parts. We have sources all over world, we can ship to anywhere in the world.</p><br>";
            echo "<h2>Replacement parts for</h2><br>";
            echo "<ul>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a0'> BENDIX</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a1'> BOBCAT</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a2'> CARRIER</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a3'> CASE</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a4'> CATERPILLAR</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a5'> CUMMINS</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a6'> DETROIT</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a7'> FORD</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a8'> HINO</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a9'> IHC</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a10'> ISUZU</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a11'> JOHN DEERE</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a12'> KUBOTA</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a13'> MASSEY FERGUSON</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a14'> MAZDA</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a15'> NAVISTAR</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a16'> NISSAN</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a17'> PERKINS</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a18'> THERMO-KING</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a19'> TOYOTA</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a20'> WAUKESHA</a></li>";
            echo "<li class='prolist'><span>&#8226;</span><a href='?tipoPro=a21'> YANMAR</a></li>";
            echo "</ul>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="1" )
          {
            echo "<h2>Undercarriage</h2><br>";
            echo "<img width='130' height='110' src='images/pro/1/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/1/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/1/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/1/4.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="2" )
          {
            echo "<h2>Track roller</h2><br>";
            echo "<img width='130' height='110' src='images/pro/2/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/2/7.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="3" )
          {
            echo "<h2>Carrier roller</h2><br>";
            echo "<img width='130' height='110' src='images/pro/3/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/8.jpg'>";
            echo "<img width='130' height='110' src='images/pro/3/9.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="4" )
          {
            echo "<h2>Sprocket</h2><br>";
            echo "<img width='130' height='110' src='images/pro/4/1.gif'>";
            echo "<img width='130' height='110' src='images/pro/4/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/4/8.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="5" )
          {
            echo "<h2>Idler</h2><br>";
            echo "<img width='130' height='110' src='images/pro/5/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/5/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/5/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/5/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/5/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/5/6.gif'>";
            echo "<img width='130' height='110' src='images/pro/5/7.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="6" )
          {
            echo "<h2>Steel track Assly</h2><br>";
            echo "<img width='130' height='110' src='images/pro/6/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/6/2.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="7" )
          {
            echo "<h2>Rubber track Assly</h2><br>";
            echo "<img width='130' height='110' src='images/pro/7/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/7/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/7/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/7/4.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="8" )
          {
            echo "<h2>Track shoe</h2><br>";
            echo "<img width='130' height='110' src='images/pro/8/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/8/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/8/3.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="9" )
          {
            echo "<h2>Track link assly</h2><br>";
            echo "<img width='130' height='110' src='images/pro/9/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/5.gif'>";
            echo "<img width='130' height='110' src='images/pro/9/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/9/8.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="10" )
          {
            echo "<h2>Chassis assly</h2><br>";
            echo "<img width='130' height='110' src='images/pro/10/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/10/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/10/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/10/4.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="11" )
          {
            echo "<h2>Bucket</h2><br>";
            echo "<img width='130' height='110' src='images/pro/11/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/11/8.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="12" )
          {
            echo "<h2>Graber bucket</h2><br>";
            echo "<img width='130' height='110' src='images/pro/12/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/12/7.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="13" )
          {
            echo "<h2>Teeth and adapter</h2><br>";
            echo "<img width='130' height='110' src='images/pro/13/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/8.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/9.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/10.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/11.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/12.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/13.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/14.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/15.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/16.jpg'>";
            echo "<img width='130' height='110' src='images/pro/13/17.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";         
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="14" )
          {
            echo "<h2>Ripper</h2><br>";
            echo "<img width='130' height='110' src='images/pro/14/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/14/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/14/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/14/4.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="15" )
          {
            echo "<h2>Side cutter</h2><br>";
            echo "<img width='130' height='110' src='images/pro/15/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/15/2.gif'>";
            echo "<img width='130' height='110' src='images/pro/15/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/15/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/15/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/15/6.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="16" )
          {
            echo "<h2>Cutting blade and edge</h2><br>";
            echo "<img width='130' height='110' src='images/pro/16/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/8.jpg'>";
            echo "<img width='130' height='110' src='images/pro/16/9.gif'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="17" )
          {
            echo "<h2>Breaking hammer</h2><br>";
            echo "<img width='130' height='110' src='images/pro/17/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/17/8.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="18" )
          {
            echo "<h2>Slewing</h2><br>";
            echo "<img width='130' height='110' src='images/pro/18/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/18/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/18/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/18/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/18/5.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="19" )
          {
            echo "<h2>Pump, cylinder & Valve</h2><br>";
            echo "<img width='130' height='110' src='images/pro/19/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/7.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/8.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/9.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/10.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/11.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/12.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/13.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/14.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/15.jpg'>";
            echo "<img width='130' height='110' src='images/pro/19/16.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="20" )
          {
            echo "<h2>Others</h2><br>";
            echo "<img width='130' height='110' src='images/pro/20/1.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/2.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/3.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/4.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/5.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/6.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/7.gif'>";
            echo "<img width='130' height='110' src='images/pro/20/8.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/9.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/10.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/11.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/12.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/13.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/14.jpg'>";
            echo "<img width='130' height='110' src='images/pro/20/15.jpg'>";
            echo "<br><br><h4>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a0")
          {
            echo "<h2 class='padd'>BENDIX<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>TUFLO 400</li>";
            echo "<li>TUFLO 500</li>";
            echo "<li>TUFLO 501</li>";
            echo "<li>TUFLO 550</li>";
            echo "<li>TUFLO 600</li>";
            echo "<li>TUFLO 700</li>";
            echo "<li>TUFLO 750</li>";
            echo "<li>TUFLO 1000</li>";
            echo "</ul>";
            echo "<h3>Parts available:</h3>";
            echo "<ul>";
            echo "<li>PISTONS<li>";
            echo "<li>RING SETS</li>";
            echo "<li>BEARINGS</li>";
            echo "<li>UNLOADER KITS</li>";
            echo "<li>HEAD KITS</li>";
            echo "<li>PIN BUSHINGS</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a1")
          {
            echo "<h2 class='padd'>BOBCAT<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>320</li>";
            echo "<li>322</li>";
            echo "<li>325</li>";
            echo "<li>328</li>";
            echo "<li>331</li>";
            echo "<li>334</li>";
            echo "<li>337</li>";
            echo "<li>341</li>";
            echo "<li>742</li>";
            echo "<li>743</li>";
            echo "<li>751</li>";
            echo "<li>753</li>";
            echo "<li>763</li>";
            echo "<li>773</li>";
            echo "<li>825</li>";
            echo "<li>853</li>";
            echo "<li>943</li>";
            echo "<li>953</li>";
            echo "<li>970</li>";
            echo "<li>974</li>";
            echo "<li>1213</li>";
            echo "<li>1600</li>";
            echo "<li>2400</li>";
            echo "<li>2410-E</li>";
            echo "<li>2410-L</li>";
            echo "<li>642-B</li>";
            echo "<li>642-E</li>";
            echo "<li>643-L</li>";
            echo "<li>742B-E</li>";
            echo "<li>742B-L</li>";
            echo "<li>751G</li>";
            echo "<li>753G</li>";
            echo "<li>753H</li>";
            echo "<li>753L</li>";
            echo "<li>763G</li>";
            echo "<li>773G-E</li>";
            echo "<li>773G-L</li>";
            echo "<li>843B</li>";
            echo "<li>843-L</li>";
            echo "<li>963G-E</li>";
            echo "<li>963G-L</li>";            
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a2")
          {
            echo "<h2 class='padd'>CARRIER<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>CT3-44-TV</li>";
            echo "<li>CT4-114-IDI</li>";
            echo "<li>CT4-114-DI</li>";
            echo "<li>CT4-114-TV</li>";
            echo "<li>CT4-133-DI</li>";
            echo "<li>CT4-134-DI</li>";
            echo "<li>CT4-134-TV</li>";
            echo "</ul>";
            echo "<h3>Parts available:</h3>";
            echo "<ul>";
            echo "<li>ENGINE KITS</li>";
            echo "<li>PISTONS</li>";
            echo "<li>LINERS</li>";
            echo "<li>RINGS</li>";
            echo "<li>GASKET SETS</li>";
            echo "<li>VALVE TRAIN</li>";
            echo "<li>ROD/MAIN BEARINGS</li>";
            echo "<li>GLOW PLUGS</li>";
            echo "<li>THRUST WASHER SETS</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a3")
          {
            echo "<h2 class='padd'>CASE<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>G180D EARLY</li>";
            echo "<li>G180D LATE</li>";
            echo "<li>G207D EARLY</li>";
            echo "<li>G207D LATE</li>";
            echo "<li>A267BD</li>";
            echo "<li>A267D</li>";
            echo "<li>A401BD</li>"; 
            echo "<li>A401D</li>"; 
            echo "<li>A301D</li>"; 
            echo "<li>A301DF</li>"; 
            echo "<li>A301BD</li>"; 
            echo "<li>A451D</li>"; 
            echo "<li>A451BD</li>"; 
            echo "<li>A451BDT</li>"; 
            echo "<li>A336BD</li>"; 
            echo "<li>A336BDT</li>"; 
            echo "<li>G148</li>"; 
            echo "<li>G148D</li>"; 
            echo "<li>CASE 239NA</li>"; 
            echo "<li>CASE 239T</li>"; 
            echo "<li>CASE 239TA</li>"; 
            echo "<li>CASE 359N)</li>"; 
            echo "<li>CASE 359T</li>"; 
            echo "<li>CASE 359TA</li>"; 
            echo "<li>CASE 505T</li>"; 
            echo "<li>CASE 505TA</li>"; 
            echo "<li>CASE 855</li>";             
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a4")
          {
            echo "<h2 class='padd'>CATERPILLAR<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>3508</li>";
            echo "<li>3512</li>";
            echo "<li>3516</li>";
            echo "<li>3524</li>";
            echo "<li>G3508</li>";
            echo "<li>G3512</li>";
            echo "<li>G3516</li>";
            echo "<li>G3520</li>";
            echo "<li>3406</li>";
            echo "<li>3408</li>";
            echo "<li>3412</li>";
            echo "<li>3406E</li>";
            echo "<li>3408E</li>";
            echo "<li>3412E</li>";
            echo "<li>G3406</li>";
            echo "<li>G3408</li>";
            echo "<li>G3412</li>";
            echo "<li>3304</li>";
            echo "<li>3306</li>";
            echo "<li>D333</li>";
            echo "<li>G3304</li>";
            echo "<li>G3306</li>";
            echo "<li>G333</li>";
            echo "<li>3204</li>";
            echo "<li>3208N</li>";
            echo "<li>3208T</li>";
            echo "<li>3114</li>";
            echo "<li>3116</li>";
            echo "<li>3126</li>";
            echo "<li>3176</li>";
            echo "<li>3013</li>";
            echo "<li>3024</li>";
            echo "<li>3046</li>";
            echo "<li>3054</li>";
            echo "<li>3056</li>";
            echo "<li>3064</li>";
            echo "<li>3066</li>";
            echo "<li>D379</li>";
            echo "<li>D398</li>";
            echo "<li>D399</li>";
            echo "<li>G379</li>";
            echo "<li>G398</li>";
            echo "<li>G399</li>";
            echo "<li>D353</li>";
            echo "<li>G353</li>";
            echo "<li>D339</li>";
            echo "<li>D342</li>";
            echo "<li>G342</li>";
            echo "<li>D343</li>";
            echo "<li>D346</li>";
            echo "<li>D348</li>";
            echo "<li>C7</li>";
            echo "<li>C9</li>";
            echo "<li>C10</li>";
            echo "<li>C11</li>";
            echo "<li>C12</li>";
            echo "<li>C13</li>";
            echo "<li>C15</li>";
            echo "<li>C16</li>";
            echo "<li>C18</li>";
            echo "<li>C27</li>";
            echo "<li>C32</li>";
            echo "<li>1140</li>";
            echo "<li>1145</li>";
            echo "<li>1160</li>";
            echo "<li>1673</li>";
            echo "<li>1674</li>";
            echo "<li>1676</li>";
            echo "<li>1693</li>";
            echo "</ul>";
            echo "<h3>Parts available:</h3>";
            echo "<ul>";
            echo "<li>IN FRAME / OUT OF FRAME KITS</li>";
            echo "<li>CYLINDER KITS</li>";
            echo "<li>PISTON KITS</li>";
            echo "<li>GASKET SETS</li>";
            echo "<li>VALVE TRAIN</li>";
            echo "<li>ROD/MAIN BEARINGS</li>";
            echo "<li>SEALS AND OTHER</li>";
            echo "<li>INTERNATIONAL ENGINE COMPONENTS</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a5")
          {
            echo "<h2 class='padd'>CUMMINS<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>4B</li>";
            echo "<li>4BT</li>";
            echo "<li>4BTA</li>";
            echo "<li>6B</li>";
            echo "<li>6BT</li>";
            echo "<li>6BTA</li>";
            echo "<li>6C</li>";
            echo "<li>6CT</li>";
            echo "<li>6CTA</li>";
            echo "<li>KT19</li>";
            echo "<li>KTA19</li>";
            echo "<li>KTTA19</li>";
            echo "<li>K38</li>";
            echo "<li>KTA38</li>";
            echo "<li>K50</li>";
            echo "<li>KTA50</li>";
            echo "<li>VT28</li>";
            echo "<li>VTA28</li>";
            echo "<li>ISB</li>";
            echo "<li>ISC</li>";
            echo "<li>ISM</li>";
            echo "<li>ISX</li>";
            echo "<li>855</li>";
            echo "<li>NT855</li>";
            echo "<li>L10 QSM</li>";
            echo "<li>QSM11</li>";
            echo "<li>QSX</li>";
            echo "<li>N14</li>";
            echo "<li>B/ISB</li>";
            echo "<li>L10/M11</li>"; 
            echo "<li>K/KT</li>"; 
            echo "<li>C/ISC</li>";           
            echo "</ul>";
            echo "<h3>Parts available:</h3>";
            echo "<ul>";
            echo "<li>IN FRAME / OUT OF FRAME KITS</li>";
            echo "<li>CYLINDER KITS</li>";
            echo "<li>PISTON KITS</li>";
            echo "<li>GASKET SETS</li>";
            echo "<li>VALVE TRAIN</li>";
            echo "<li>ROD/MAIN BEARINGS</li>";
            echo "<li>WATER PUMPS/TURBOCHARGERS</li>";
            echo "<li>SEALS AND OTHER</li>";
            echo "<li>INTERNATIONAL ENGINE COMPONENTS</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a6")
          {
            echo "<h2 class='padd'>DETROIT<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>60 SERIE</li>";
            echo "<li>353</li>";
            echo "<li>3V53</li>";
            echo "<li>453</li>";
            echo "<li>4V53</li>";
            echo "<li>653</li>";
            echo "<li>6V53</li>";
            echo "<li>6V71N</li>";
            echo "<li>6V71T</li>";
            echo "<li>6V92</li>";
            echo "<li>6V92TT</li>";
            echo "<li>871</li>";
            echo "<li>8V71</li>";
            echo "<li>8V92T</li>";
            echo "<li>8V92TT</li>";
            echo "<li>12V71N</li>";
            echo "<li>12V71T</li>";
            echo "<li>12V92</li>";
            echo "<li>12V92TT</li>";
            echo "<li>16V92</li>";
            echo "<li>16V92T</li>";
            echo "<li>16V149</li>";         
            echo "</ul>";
            echo "<h3>Parts available:</h3>";
            echo "<ul>";
            echo "<li>IN FRAME / OUT OF FRAME KITS</li>";
            echo "<li>CYLINDER KITS</li>";
            echo "<li>LINERLESS KITS</li>";
            echo "<li>GASKET SETS</li>";
            echo "<li>VALVE TRAIN</li>";
            echo "<li>ROD/MAIN BEARINGS</li>";
            echo "<li>WATER PUMPS/BLOWER REPAIR KITS</li>";
            echo "<li>SEALS AND OTHER</li>";
            echo "<li>INTERNATIONAL ENGINE COMPONENTS</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a7")
          {
            echo "<h2 class='padd'>FORD<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>120 GAS</li>";
            echo "<li>134 GAS</li>";
            echo "<li>172 GAS</li>";
            echo "<li>172 DIESEL</li>";
            echo "<li>158 GAS</li>";
            echo "<li>158 DIESEL</li>";
            echo "<li>201 GAS</li>";
            echo "<li>201 DIESEL</li>";
            echo "<li>256 GAS</li>";
            echo "<li>256 DIESEL</li>"; 
            echo "<li>256T DIESEL</li>";
            echo "<li>268 DIESEL</li>";
            echo "<li>268T DIESEL</li>";
            echo "<li>401 DIESEL</li>";
            echo "<li>401T DIESEL</li>";       
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a8")
          {
            echo "<h2 class='padd'>HINO<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>W04C</li>";
            echo "<li>W06E</li>";
            echo "<li>H06C</li>";
            echo "<li>H07C</li>";
            echo "<li>SERIES ENGINES</li>";
            echo "</ul>";
            echo "<h3>Parts available:</h3>";
            echo "<ul>";
            echo "<li>ENGINES KITS</li>";
            echo "<li>IN FRAME / OUT OF FRAME KITS</li>";
            echo "<li>CYLINDER KITS</li>";
            echo "<li>GASKET SETS</li>";
            echo "<li>PISTON KITS</li>";
            echo "<li>ROD/MAIN BEARINGS</li>";
            echo "<li>THRUST WATER</li>";
            echo "<li>VALVE TRAIN COMPONENTS</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a9")
          {
            echo "<h2 class='padd'>IHC<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>D414</li>";   
            echo "<li>DT414</li>";  
            echo "<li>DT1414B</li>";  
            echo "<li>DT436</li>";  
            echo "<li>DT436B</li>";  
            echo "<li>DT466B</li>";  
            echo "<li>DTI466B</li>";  
            echo "<li>DT466C</li>";  
            echo "<li>DTI466C</li>";  
            echo "<li>DT466</li>";  
            echo "<li>DTI466</li>";    
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a10")
          {
            echo "<h2 class='padd'>ISUZU<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>4BD1/T</li>";
            echo "<li>6BD1/T</li>";
            echo "<li>4BD2TC</li>";
            echo "<li>6BG1/TC/TCN</li>";
            echo "<li>4HE1T</li>";
            echo "<li>6HE1T/TCN</li>";
            echo "<li>6HK1TCN/TS</li>";       
            echo "</ul>";
            echo "<h3>Parts available:</h3>";
            echo "<ul>";
            echo "<li>IN FRAME / OUT OF FRAME KITS</li>";
            echo "<li>CYLINDER KITS</li>";
            echo "<li>GASKET SETS</li>";
            echo "<li>VALVE TRAIN</li>";
            echo "<li>ROD/MAIN BEARINGS</li>";
            echo "<li>OIL PUMPS</li>";
            echo "<li>THRUST WATER</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a11")
          {
            echo "<h2 class='padd'>JOHN DEERE<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>OEM Engine & Power Unit Application Chart</h3>
                  <ul>
                    <li>300 Series: Saran, France / Dubuque, Iowa</li>
                    <li>400 Series: Waterloo</li>
                    <li>500 Series</li>
                    <li>John Deere® / Yanmar®</li>
                    <li>Power Tech</li>
                  </ul>
                  <h3>Equipment Application Chart</h3>
                  <h3 class='padd'>Industrial Equipment:</h3>
                  <ul>
                    <li>Articulated Dump Trucks</li>
                    <li>Dump Trucks</li>
                    <li>Forwarders</li>
                    <li>Harvesters</li>
                    <li>Loaders</li>
                    <li>Loggers</li>
                    <li>Backhoe Loaders</li>
                    <li>Compactors</li>
                    <li>Crawler Dozers</li>
                    <li>Excavators</li>
                    <li>Feller Bunchers / Log Loarders</li>
                    <li>Forklifts</li>
                    <li>Motor Graders</li>
                    <li>Scrapers</li>
                    <li>Skidders</li>
                    <li>Wheel Loaders</li>
                  </ul>
                  <h3 class='padd'>Agricultural Equipment:</h3>
                  <ul>
                    <li>Forestry Swing Machines</li>
                    <li>Mowers</li>
                    <li>
                      <ul>
                        <li>Fairway Mowers</li>
                        <li>Front Mowers</li>
                        <li>Prof Mowers</li>
                        <li>Reel Mowers</li>
                        <li>Rotary Deck Mowers</li>
                        <li>Series II Mowers</li>
                        <li>Turbo Mowers</li>
                      </ul>
                    </li>
                    <li>Skid Steers</li>
                    <li>SPFH</li>
                    <li>Motor Graders</li>
                    <li>Cane Harvesters</li>
                    <li>Combines</li>
                    <li>Harvesters</li>
                    <li>Cotton Pickers</li>
                    <li>Farm Tractors</li>
                    <li>Forage / Cane Harvesters</li>
                    <li>Sprayers</li>
                    <li>Windrowers</li>
                  </ul>
                  <h3>Water Pump Repair Kit</h3>
                  <ul>
                    <li>Water Pump Repair Kit Identification Chart</li>
                  </ul>
                  <h3>John Deere Replacement Parts</h3>
                  <h4>Diesel Engine & Aftermarket Spare Parts</h4>   
                  <p>Our flagship line of John Deere® diesel engine parts covers 300, 400, 500 & Power Tech (3029-6081) Series engines in agricultural, construction, marine and power generation applications (ranging from 20KW-300KW).</p>
                  <p>Our range of replacement parts for John Deere® includes the most complete Overhaul (Out of Frame) and In-Frame Kits on the market. We also offer a large selection of spare parts and components, including Pistons, Ring sets, Crankshafts, Camshafts, Oil and Water Pumps, Injectors, Gaskets, Seals, and several more engine parts.</p>";

            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a12")
          {
            echo "<h2 class='padd'>KUBOTA<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>D722</li>";
            echo "<li>D750</li>";
            echo "<li>D850</li>";
            echo "<li>D905</li>";
            echo "<li>D1005</li>";
            echo "<li>D1105</li>";
            echo "<li>D1402</li>";
            echo "<li>D1403</li>";
            echo "<li>D1703</li>";
            echo "<li>V1100</li>";
            echo "<li>V1200</li>";
            echo "<li>V1205</li>";
            echo "<li>V1305</li>";
            echo "<li>V1505</li>";
            echo "<li>V1702</li>";
            echo "<li>V1902</li>";
            echo "<li>V1903</li>";
            echo "<li>V2003</li>";
            echo "<li>V2003T</li>";
            echo "<li>V2203</li>";     
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a13")
          {
            echo "<h2 class='padd'>MASSEY FERGUSON<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>Z120</li>";
            echo "<li>Z129</li>";
            echo "<li>Z134</li>";
            echo "<li>Z145</li>";
            echo "<li>G176</li>";
            echo "<li>G3.152</li>";
            echo "<li>A3.152</li>";
            echo "<li>D3.152</li>";
            echo "<li>4.203</li>";
            echo "<li>D4.203</li>";
            echo "<li>4.203.2</li>"; 
            echo "<li>D4.212</li>";
            echo "<li>4.236</li>";
            echo "<li>G4.236</li>";
            echo "<li>T4.236</li>";
            echo "<li>4.248</li>";
            echo "<li>4.248.2</li>";
            echo "<li>4.318</li>";
            echo "<li>4.108</li>";
            echo "<li>6.354</li>";
            echo "<li>6.354.1</li>";
            echo "<li>6.354.2</li>";
            echo "<li>6.354.4</li>";
            echo "<li>T6.354</li>";
            echo "<li>T6.354.1</li>";
            echo "<li>T6.354.2</li>";
            echo "<li>T6.354.4</li>";
            echo "<li>1004.40</li>";
            echo "<li>1004.40T</li>";
            echo "<li>1006.60</li>";
            echo "<li>1006.60T</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a14")
          {
            echo "<h2 class='padd'>MAZDA<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>UA</li>";
            echo "<li>VA</li>";
            echo "<li>D5</li>";
            echo "<li>F2</li>";
            echo "<li>FE</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a15")
          {
            echo "<h2 class='padd'>NAVISTAR<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>DT360</li>";
            echo "<li>DT408</li>";
            echo "<li>D414</li>";
            echo "<li>DT414</li>";
            echo "<li>D436</li>";
            echo "<li>DT436</li>";
            echo "<li>DT466</li>";
            echo "<li>DT466E</li>";
            echo "<li>I530E</li>";
            echo "<li>D530</li>";
            echo "<li>6.9L</li>";
            echo "<li>7.3L</li>";
            echo "<li>T444E</li>";        
            echo "</ul>";
            echo "<h3>Parts available:</h3>";
            echo "<ul>";
            echo "<li>IN FRAME / OUT OF FRAME KITS</li>";
            echo "<li>CYLINDER KITS</li>";
            echo "<li>GASKET SETS</li>";
            echo "<li>VALVE TRAIN</li>";
            echo "<li>ROD/MAIN BEARINGS</li>";
            echo "<li>WATER / OIL PUMPS</li>";
            echo "<li>THRUST WATER</li>";
            echo "<li>VALVE TRAIN COMPONENTS</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a16")
          {
            echo "<h2 class='padd'>NISSAN<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>D11</li>";
            echo "<li>A12</li>";
            echo "<li>A15</li>";
            echo "<li>J15</li>";
            echo "<li>H20</li>";
            echo "<li>H20-ii</li>";
            echo "<li>H25</li>";
            echo "<li>H30</li>";
            echo "<li>Z24</li>";
            echo "<li>P40</li>";
            echo "<li>PPU 240/241</li>";
            echo "<li>SD22</li>";
            echo "<li>SD25</li>";
            echo "<li>SD33</li>";
            echo "<li>TB42</li>";
            echo "<li>TD42</li>";
            echo "<li>FD6</li>";
            echo "<li>K21</li>";
            echo "<li>K25</li>";        
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a17")
          {
            echo "<h2 class='padd'>PERKINS<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Equipment Application Chart</h3>
                  <h3 class='padd'>Material Handling and Industrial Application Equipment Chart:</h3>
                  <ul>
                    <li>Allis Chalmers</li>
                    <li>Noble</li>
                    <li>JLG</li>
                    <li>LoadLifter</li>
                    <li>ManitexLiftking</li>
                    <li>Manitou</li>
                    <li>OmegaLift</li>
                    <li>Tovel</li>
                    <li>Bobcat</li>
                    <li>Caterpillar</li>
                    <li>Clark Equipment</li>
                    <li>Eaton Corp</li>
                    <li>Fg Wilson</li>
                    <li>Gehl Mfg</li>
                    <li>Hyster</li>
                    <li>Ingersoll Rand Compressors</li>
                    <li>Jcb</li>
                    <li>Lincoln Electric</li>
                    <li>Massey Ferguson Industrial</li>
                    <li>Melroe</li>
                    <li>Michigan</li>
                    <li>Owattona Mfg</li>
                    <li>Perkins Usa</li>
                    <li>Sullair Corp</li>
                    <li>Towmotor</li>
                    <li>Vermeer Mfg</li>
                  </ul>
                  <h3 class='padd'>Agricultural Application Equipment Chart:</h3>
                  <ul>
                    <li>Jacobsen Mfg Co</li>
                    <li>Landini Tractors</li>
                    <li>Massey Ferguson Agricultural</li>
                    <li>Mccormick</li>
                    <li>New Holland</li>
                    <li>New Idea</li>
                    <li>Sperry New Holland</li>
                    <li>White Farm</li>
                  </ul>
                  <h3 class='padd'>Marine Application Equipment Chart:</h3>
                  <ul>
                    <li>Perkins Sabre</li>
                    <li>Marine</li>
                  </ul>
                  <h3>Perkins Replacement Parts</h3>
                  <h4>Diesel Engine & Aftermarket Spare Parts</h4> 
                  <p>Our Perkins® diesel engine parts cover diesels and gas engines, in 3, 4 and 6 cylinder configurations and including the popular 4.236 and the 100, 400, 1000, 1100 series engines. These engines can be found in agricultural, construction, marine & power generation applications (which span from 30KW-150KW).</p>
                  <p>Our selection of replacement parts for Perkins® comprises of the most complete Overhaul (Out of Frame) and In-Frame Kits on the market. We also offer an extensive selection of individual parts and components such as Pistons, Ring sets, Crankshafts, Camshafts, Oil and Water Pumps, Injectors, Gaskets, Seals, and many more engine parts.</p>";
                              
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a18")
          {
            echo "<h2 class='padd'>THERMO-KING<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>D214</li>";
            echo "<li>X214</li>";
            echo "<li>426</li>";
            echo "<li>X426</li>";
            echo "<li>X430</li>";
            echo "<li>X430LS</li>";
            echo "</ul>";
            echo "<h3>Parts available:</h3>";
            echo "<ul>";
            echo "<li>ENGINE OVERHAUL KITS</li>";
            echo "<li>COMPRESSOR OVERHAUL</li>";
            echo "<li>COVERSION KITS</li>";
            echo "<li>PISTON KITS</li>";
            echo "<li>ENGINE BEARINGS</li>";
            echo "<li>THRUST WASHERS</li>";
            echo "<li>GASKET SETS</li>";
            echo "<li>CRANKSHAFTS</li>";
            echo "<li>SEALS</li>";
            echo "<li>WATER/OIL PUMPS</li>";
            echo "<li>OTHER INTERNAL ENGINE COMPONENTS INCLUDING VALVE TRAIN</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a19")
          {
            echo "<h2 class='padd'>TOYOTA<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>2R</li>";
            echo "<li>3P</li>";
            echo "<li>4P</li>";
            echo "<li>4Y</li>";
            echo "<li>5R</li>";
            echo "<li>5R-L</li>";
            echo "<li>5K</li>";
            echo "<li>5P</li>";
            echo "<li>2J</li>";
            echo "<li>F</li>";
            echo "<li>2F</li>";
            echo "<li>3F</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a20")
          {
            echo "<h2 class='padd'>WAUKESHA<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Offering replacement parts for:</h3>";
            echo "<ul class='over'>";
            echo "<li>D155G</li>";
            echo "<li>D176G</li>";
            echo "</ul>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
          else if (isset($_GET['tipoPro']) && $_GET['tipoPro']=="a21")
          {
            echo "<h2 class='padd'>YANMAR<span>Overhaul Kits</span></h2>";
            echo "<div class='overhaul'>";
            echo "<h3>Equipment Application Chart</h3>
                  <ul>
                    <li>Gehl</li>
                    <li>Hi Power Genset Model</li>
                    <li>Komatsu</li>
                    <li>Takeuchi</li>
                    <li>Thermo King</li>
                  </ul>
                  <br>
                  <h4>Engine Kit Composition for Yanmar® Applications</h4>
                  <p>YOK: Engine Overhaul Kits Include: All required pistons, pins and retainers, main bearings, conrod bearings, thrust washers, crankshaft seals, complete overhaul gasket set, and liquid gasket.</p>
                  <h3>Yanmar Replacement Parts</h3>                  
                  <h4>Diesel Engine & Aftermarket Spare Parts</h4>   
                  <p>Our Yanmar diesel engine parts cover the 3TNE84D / 4TNE84D / 4TNE84T engine models. These Yanmar engines are used in construction, marine & power generation applications.</p>
                  <p>Our assortment of replacement parts for Yanmar® consist of the most complete Overhaul (Out of Frame) on the market. We also offer a extensive range of individual parts and components, including Pistons, Ring sets, Crankshafts, Camshafts, Oil and Water Pumps, Gaskets, Seals, and many more engine parts.</p>";
            echo "</div>";
            echo "<br><h4 class='padd'>Other models available upon <a href='quotation.php'>REQUEST</a></h4>";          
          }
        ?>  
      </article>
      <div class="clear"></div>
    </section>
    <footer>
      <div id="footer">
        <div>
          <p>Euroamerica Parts & Engines, Free  Zone VBA<br>
          Frankrijkstraat 13<br>
          Building 4, unit 1, office 7-B<br>
          Free zone Bushiri, Oranjestad Aruba, Dutch Caribbean<br>
          Tel: (+297)586-2399 / Cell: (+297)594-8733<br>
          <a href="mailto:sales@euroamericapartsandengines.com" id="mail">sales@euroamericapartsandengines.com</a><br></p>
        </div>
        <div>
          <img src="images/paypal.png" width="215px">
        </div>
      </div>  
      <ul>
        <li><a href="index.html">Home</a></li>
        <li>|</li>
        <li><a href="about.html">About Us</a></li>
        <li>|</li>
        <li><a href="products.php?tipoPro=0">Products</a></li>
        <li>|</li>
        <li><a href="manufacturing.html">Manufacturing</a></li>
        <li>|</li>
        <li><a href="quotation.php">Request for Quotation</a></li>
        <li>|</li>
        <li><a href="contact.php">Contact Us</a></li>
      </ul>
    </footer>
  </body>
</html>