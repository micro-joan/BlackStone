<?php

$url = 'https://darkhacking.com'; // URL del sitio web que deseas verificar

// Obtener el contenido HTML de la página
$html = file_get_contents($url);

// Verificar si el contenido HTML contiene elementos característicos de WordPress
if (strpos($html, 'wp-') !== false) {
    echo "El sitio web está utilizando WordPress.";
} else {
    echo "El sitio web no está utilizando WordPress.";
}

?>