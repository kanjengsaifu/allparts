<?php
  $ms = null;  
  if (isset($_POST["message"]) && !empty($_POST["message"])) 
  {
    $uniqueid= uniqid('np');

    $para = "sales@euroamericapartsandengines.com";
    $asunto = "Contact";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: EuroAmerica \r\n";
    $headers .= "Subject: Contact\r\n";

    $headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid. "\r\n";
 
    $message = "";
 
    $message .= "\r\n\r\n--" . $uniqueid. "\r\n";
    $message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
    $message .= "<table style='font-size:120%;font-weight:bold'><tr><td style='color:gray'>Name:</td><td> ".$_POST['namex']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Company:</td><td> ".$_POST['company']."</td></tr>";
    $message .= "<tr><td style='color:gray'>City:</td><td> ".$_POST['city']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Country:</td><td> ".$_POST['country']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Email:</td><td> ".$_POST['email']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Tlf:</td><td> ".$_POST['tlf']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Fax:</td><td> ".$_POST['fax']."</td></tr></table><br>";
    $message .= "<p style='font-size:120%;font-weight:bold'><span style='color:gray'>Mensaje:</span><br><br>".$_POST['message']."</p>";
 
    $message .= "\r\n\r\n--" . $uniqueid. "--";

    mail($para, $asunto, $message, $headers);
    $ms = "<span class='envi'>Message sent successfully</span>";
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>EuroAmerica Parts and Engines, Freezone Aruba VBA</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>


    <link rel="stylesheet" type="text/css" media="screen" href="css/sequencejs-theme.sliding-horizontal-parallax.css" />
    <link href="http://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet" type="text/css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
      if (typeof jQuery == 'undefined'){
        document.write(unescape('%3Cscript src="scripts/jquery-min.js" %3E%3C/script%3E'));
      }
    </script> 
    <script src="scripts/jquery.sequence-min.js"></script>
    <script src="scripts/sequencejs-options.sliding-horizontal-parallax.js"></script>
  </head>
  <body>
    <header>
      <a href="index.off.html"><img src="images/logo.png" width="200px" id="logo"></a>
      <a href="contacto.php" class="lang">Español <img src="images/spanish.png" width="25px" id="lan"></a>
      <h2>DIESEL ENGINES AND PARTS <br>FOR MARINE, INDUSTRIAL AND HEAVY EQUIPMENT.</h2>
    </header>
    <nav>
      <ul>
        <a href="index.off.html"><li style="background-image: none">Home</li></a>
        <a href="about.html"><li>About Us</li></a>
        <a href="products.php?tipoPro=0"><li>Products</li></a>
        <a href="manufacturing.html"><li>Manufacturing</li></a>
        <a href="quotation.php"><li>Request for Quotation</li></a>
        <a href="contact.php"><li>Contact us</li></a>
      </ul>
    </nav>
    <div class="banner">
      <a href="products.php?tipoPro=0">
        <div id="sequence">
          <ul class="sequence-canvas">
            <li class="animate-in">
              <div class="info">
                <h2>Heavy equipments</h2>
                <p>Distributor of spare parts for marine, heavy and industrial equipment.</p>
              </div>
              <img class="sky" src="images/bg-clouds.png" alt="Blue Sky" />
              <img class="balloon" src="images/balloon.png" alt="Balloon" />
            </li>
            <li>
              <div class="info">
                <h2>Diesel engines</h2>
                <p>We supply caterpillar, cummins and detroit engines, reman, good used, complete, long block or short block engines.</p>
              </div>
              <img class="sky" src="images/bg-clouds.png" alt="Blue Sky" />
              <img class="aeroplane" src="images/aeroplane.png" alt="Aeroplane" />
            </li>
            <li>
              <div class="info">
                <h2>Spare parts</h2>
                <p>We offer a complete line of american, european and japanese spare parts.</p>
              </div>
              <img class="sky" src="images/bg-clouds.png" alt="Blue Sky" />
              <img class="kite" src="images/kite.png" alt="Kite" />
            </li>
            <li>
              <div class="info">
                <h2>Marine equipments</h2>
                <p>Distributor of spare parts for marine equipment.</p>
              </div>
              <img class="sky" src="images/bg-clouds.png" alt="Blue Sky" />
              <img class="balloon" src="images/marine.png" alt="Aeroplane" style="-ms-transform:none;-webkit-transform:none;transform:none;padding-top:2em;" />
            </li>
          </ul>
        </div>
      </a>
    </div>
    <section>
      <aside class="aside2">
        <h2><img src="images/flecha.png" width="30px" height="30px"> &nbsp;Our Office</h2>
        <div>
          <p>Country: Aruba<br>City: Oranjestad<br>
          Tel: (+297)586-2399<br>Cell: (+297)594-8733<br><a href="mailto:sales@euroamericapartsandengines.com" id="mail">sales@euroamericapartsandengines.com</a></p>
        </div>
        <br>
        <h2><img src="images/flecha.png" width="30px" height="30px"> &nbsp;Working hours</h2>
        <div>
          <p><strong>Mon - Fri:</strong><br>8:00am - 12:00m<br>1:00pm - 5:00pm<br>
          <strong>Sat - Sun:</strong><br><a href="mailto:sales@euroamericapartsandengines.com" id="mail">sales@euroamericapartsandengines.com</a></p>
        </div>
      </aside>
      <article class="article2">
        <h2>Contact Us</h2>
        <p>For all your parts and engines needs please contact us.</p>
        <p>Fields with * are required</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="formulario">
          <div class="formulario">
            <p><span></span>                 <?php echo $ms; ?></p>
            <p><span>Name *</span>           <input type="text" name="namex" required/></p>
            <p><span>Company name</span>     <input type="text" name="company"/></p>
            <p><span>City</span>             <input type="text" name="city"/></p>
            <p><span>Country</span>          <input type="text" name="country"/></p>
            <p><span>Email address *</span>  <input type="email" name="email" required/></p> 
            <p><span>Telephone number</span> <input type="text" name="tlf"/></p>
            <p><span>Fax number</span>       <input type="text" name="fax"/></p> 
            <p><span>Message *</span>        <textarea rows="5" cols="45" name="message" required></textarea></p>
            <p><span>&nbsp;</span>           <input type="submit" id="btn" value="send"></p>
          </div>
        </form>
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
        <li><a href="index.off.html">Home</a></li>
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