<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
    $ms = "<span class='envi'>Mensaje enviado correctamente</span>";
  }


?>



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
      <article class="article2">
        <h2>Contáctenos</h2>
        <p>Para todas las partes y repuestos que necesite póngase en contacto con nosotros.</p>
        <p>Los campos con * son requeridos</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="formulario">
          <div class="formulario">
            <p><span></span>                     <?php echo $ms; ?></p>
            <p><span>Nombre *</span>             <input type="text" name="namex" required/></p>
            <p><span>Empresa</span>              <input type="text" name="company"/></p>
            <p><span>Ciudad</span>               <input type="text" name="city"/></p>
            <p><span>País</span>                 <input type="text" name="country"/></p>
            <p><span>Dirección de email *</span> <input type="email" name="email" required/></p> 
            <p><span>Telefono</span>             <input type="text" name="tlf"/></p>
            <p><span>Fax</span>                  <input type="text" name="fax"/></p> 
            <p><span>Mensaje *</span>            <textarea rows="5" cols="45" name="message" required></textarea></p>
            <p><span>&nbsp;</span>               <input type="submit" id="btn" value="enviar"></p>
          </div>
        </form>
      </article>
      <div class="clear"></div>
    </section>