<?php
  $ms = null;
  if (isset($_POST["quotation"]) && !empty($_POST["quotation"])) 
  {
    $uniqueid= uniqid('np');

    $para = "sales@euroamericapartsandengines.com";
    $asunto = "Request for Quotation";

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: EuroAmerica \r\n";
    $headers .= "Subject: Request for Quotation\r\n";

    $headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid. "\r\n";
 
    $message = "";
 
    $message .= "\r\n\r\n--" . $uniqueid. "\r\n";
    $message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
    $message .= "<table style='font-size:120%;font-weight:bold'><tr><td style='color:gray'>Name:</td><td> ".$_POST['namex']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Company:</td><td> ".$_POST['company']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Address:</td><td> ".$_POST['address']."</td></tr>";
    $message .= "<tr><td style='color:gray'>City:</td><td> ".$_POST['city']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Country:</td><td> ".$_POST['country']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Email:</td><td> ".$_POST['email']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Tlf:</td><td> ".$_POST['tlf']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Cell:</td><td> ".$_POST['cell']."</td></tr>";
    $message .= "<tr><td style='color:gray'>Fax:</td><td> ".$_POST['fax']."</td></tr></table><br>";
    $message .= "<p style='font-size:120%;font-weight:bold'><span style='color:gray'>Request for Quotation:</span><br><br>".$_POST['quotation']."</p><br>";
    $message .= "<p style='font-size:120%;font-weight:bold'><span style='color:gray'>Comments:</span><br><br>".$_POST['comment']."</p>";

    $message .= "\r\n\r\n--" . $uniqueid. "--";

    mail($para, $asunto, $message, $headers);
    $ms = "<span class='envi'>Mensaje enviado correctamente</span>";
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
      <a href="inicio.html"><img src="images/logo.png" width="200px" id="logo"></a>
      <a href="quotation.php" class="lang lang2">English <img src="images/english.png" width="25px" id="lan"></a>
      <h2>PARTES Y MOTORES DIESEL <br>PARA MAQUINARIA MARINA, PESADA E INDUSTRIAL.</h2>
    </header>
    <nav>
      <ul>
        <a href="inicio.html"><li style="background-image: none">Inicio</li></a>
        <a href="nosotros.html"><li>Nosotros</li></a>
        <a href="productos.php?tipoPro=0"><li>Productos</li></a>
        <a href="manufactura.html"><li>Manufactura</li></a>
        <a href="cotizacion.php"><li>Cotizaciones</li></a>
        <a href="contacto.php"><li>Contáctenos</li></a>
      </ul>
    </nav>
    <div class="banner">
      <a href="productos.php?tipoPro=0">
        <div id="sequence">
          <ul class="sequence-canvas">
            <li class="animate-in">
              <div class="info">
                <h2>Maquinaria pesada</h2>
                <p>Distribuidor de repuestos para maquinaria marina, pesada e industrial.</p>
              </div>
              <img class="sky" src="images/bg-clouds.png" alt="Blue Sky" />
              <img class="balloon" src="images/balloon.png" alt="Balloon" />
            </li>
            <li>
              <div class="info">
                <h2>Motores diesel</h2>
                <p>Suministramos motores caterpillar, cummins y detroit, remanufacturados, en buen estado, completos, bloque largo o corto.</p>
              </div>
              <img class="sky" src="images/bg-clouds.png" alt="Blue Sky" />
              <img class="aeroplane" src="images/aeroplane.png" alt="Aeroplane" />
            </li>
            <li>
              <div class="info">
                <h2>Repuestos</h2>
                <p>Ofrecemos una línea completa de repuestos americanos, europeos y japoneses.</p>
              </div>
              <img class="sky" src="images/bg-clouds.png" alt="Blue Sky" />
              <img class="kite" src="images/kite.png" alt="Kite" />
            </li>
            <li>
              <div class="info">
                <h2>Maquinaria marina</h2>
                <p>Distribuidor de repuestos para maquinaria marina.</p>
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
        <h2><img src="images/flecha.png" width="30px" height="30px"> &nbsp;Oficina</h2>
        <div>
          <p>País: Aruba<br>Ciudad: Oranjestad<br>
          Tel: (+297)586-2399<br>Cel: (+297)594-8733<br><a href="mailto:sales@euroamericapartsandengines.com" id="mail">sales@euroamericapartsandengines.com</a></p>
        </div>
        <br>
        <h2><img src="images/flecha.png" width="30px" height="30px"> &nbsp;Horario</h2>
        <div>
          <p><strong>Lun - Vie:</strong><br>8:00am - 12:00m<br>1:00pm - 5:00pm<br>
          <strong>Sab - Dom:</strong><br><a href="mailto:sales@euroamericapartsandengines.com" id="mail">sales@euroamericapartsandengines.com</a></p>
        </div>
      </aside>
      <article class="article2 form">
        <h2>Solicitud de cotización</h2>
        <p>Por favor siempre proporcionar el número de modelo de motor , número de parte, número de serie o el tipo de equipo del cual esta solicitando un presupuesto</p>
        <p>Los campos con * son requeridos</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="formulario">
          <div class="formulario">
            <p><span></span>                              <?php echo $ms; ?></p>
            <p><span>Nombre *</span>                      <input type="text" name="namex" required/></p>
            <p><span>Empresa</span>                       <input type="text" name="company"/></p>
            <p><span>Dirección de la empresa</span>       <input type="text" name="address"/></p>
            <p><span>Ciudad, Estado, Codigo postal</span> <input type="text" name="city"/></p>
            <p><span>País</span>                          <input type="text" name="country"/></p>
            <p><span>Dirección de email *</span>          <input type="mail" name="email" required/></p>
            <p><span>Telefono</span>                      <input type="text" name="tlf"/></p>
            <p><span>Celular</span>                       <input type="text" name="cell"/></p>
            <p><span>Fax</span>                           <input type="text" name="fax"/></p>
            <p><span>Solicitud de cotización *</span>     <textarea rows="5" cols="45" name="quotation" required></textarea></p>
            <p><span>Comentario</span>                    <textarea rows="5" cols="45" name="comment"></textarea></p>
            <p><span>&nbsp;</span>                        <input type="submit" id="btn" value="enviar"></p>
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
          Edificio 4 , unidad 1 , oficina 7-B<br>
          Zona libre Bushiri, Oranjestad Aruba, Dutch Caribbean<br>
          Tel: (+297)586-2399 / Cel: (+297)594-8733<br>
          <a href="mailto:sales@euroamericapartsandengines.com" id="mail">sales@euroamericapartsandengines.com</a><br></p>
        </div>
        <div>
          <img src="images/paypal.png" width="215px">
        </div>
      </div>  
      <ul>
        <li><a href="inicio.html">Inicio</a></li>
        <li>|</li>
        <li><a href="nosotros.html">Nosotros</a></li>
        <li>|</li>
        <li><a href="productos.php?tipoPro=0">Productos</a></li>
        <li>|</li>
        <li><a href="manufactura.html">Manufactura</a></li>
        <li>|</li>
        <li><a href="cotizacion.php">Cotiaciones</a></li>
        <li>|</li>
        <li><a href="contacto.php">Contáctenos</a></li>
      </ul>
    </footer>   
  </body>
</html>