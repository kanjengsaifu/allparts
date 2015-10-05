<?php

//var_dump($_GET);


$header = file_get_contents('header.html');

$menu = file_get_contents('menu.html');


//$content = file_get_contents('content.html');

$footer = file_get_contents('footer.html');


$data = file_get_contents('lang.json');


$json = json_decode($data, true);

foreach ($json as $key => $value) {
	if (strcmp($key, 'es') === 0){
		foreach ($value as $key2 => $value2) {
			if (strcmp($key2, 'header') === 0){
				foreach ($value2 as $key3 => $value3) {
					$header = str_replace($key3, $value3, $header);
				}
				
			}

			if (strcmp($key2, 'menu') === 0){
				foreach ($value2 as $key3 => $value3) {
					$menu = str_replace($key3, $value3, $menu);
				}
				
			}
		}
	}
}

echo '<header>' . $header . '</header>' . $menu;