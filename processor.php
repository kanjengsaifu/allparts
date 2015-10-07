<?php

//var_dump($_GET);

if (isset($_GET['pg'])){

	$_GET['pg']=str_replace('/','',$_GET['pg']);
    
    switch ($_GET['pg']){
        
        case 'contactanos':
            $pag = 'contacts.php';
            break;
        case 'nosotros':
            $pag = 'about.php';
            break;
        case 'productos':
            $pag = 'products.php';
            break;
        case 'manufactura':
            $pag = 'manufactura.php';
            break;
        case 'cotizaciones':
            $pag = 'cotizaciones.php';
            break;
        default:
            $pag = 'home.php';
            break;
    }
    
} else {
    $pag = 'home.php';
}


ob_start(); # apertura de bufer
include( 'head.html' );
$head = ob_get_contents();
ob_end_clean(); # cierre de bufer
//$head = file_get_contents('head.html');

if (isset($_GET['lng'])){
	
	switch ($_GET['lng']) {
		case 's':
			$idioma = 'es';
			$idiomaText = 'Español';
			break;
		case 'n':
			$idioma = 'en';
			$idiomaText = 'English';
			break;
		case 'l':
			$idioma = 'nl';
			$idiomaText = 'Nederlandse';
			break;
		default:
			$idioma = 'es';
			$idiomaText = 'Español';
			break;
	}
} else {

$idioma = 'es';
$idiomaText = 'Español';
}

$header = file_get_contents('header.html');

$menu = file_get_contents('menu.html');


$banner = file_get_contents('banner.html');



//$content = file_get_contents($pag, false, $contexto);

ob_start(); # apertura de bufer
include( $pag );
$content = ob_get_contents();
ob_end_clean(); # cierre de bufer

$footer = file_get_contents('footer.html');


$data = file_get_contents('lang.json');


$json = json_decode($data, true);

foreach ($json as $key => $value) {
	if (strcmp($key, $idioma) === 0){
		foreach ($value as $key2 => $value2) {
			if (strcmp($key2, 'header') === 0){
				foreach ($value2 as $key3 => $value3) {
					$header = str_replace($key3, $value3, $header);
				}
				
			}

			if (strcmp($key2, '#menu') === 0){
				foreach ($value2 as $key3 => $value3) {
					$menu = str_replace($key3, $value3, $menu);
				}
				
			}
                        
                        if (strcmp($key2, '#banner') === 0){
				foreach ($value2 as $key3 => $value3) {
					$banner = str_replace($key3, $value3, $banner);
				}
				
			}
                        
                        if (strcmp($key2, '#content-'.$pag) === 0){
				foreach ($value2 as $key3 => $value3) {
                                    $content = str_replace($key3, $value3, $content);
				}
				
			}
                        
                         if (strcmp($key2, 'footer') === 0){
				foreach ($value2 as $key3 => $value3) {
					$footer = str_replace($key3, $value3, $footer);
				}
				
			}
		}
	}
}

$header = str_replace('$_lang_$', $idioma, $header);
$header = str_replace('$_LANG_$', $idiomaText, $header);

echo '<!DOCTYPE html>
<html lang="en">'.$head. '<body><header>' . $header . '</header>' . $menu . $banner . $content . '<footer>' . $footer . '</footer></body></html>';