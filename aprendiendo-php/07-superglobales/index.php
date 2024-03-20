<?php

//  ***** VARIABLES SUPERGLOBALES  *****

//  Variables de Servidor.
echo '<h1>';
echo $_SERVER['SERVER_ADDR'];       //  saca la direccion ip de mi servidor local - localhost.
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_NAME'];       //  saca el dominio que tenga la ip de mi servidor local - localhost.
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE'];       //  saca la herramienta como servidor web local - localhost.
echo '</h1>';

echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];       //  saca el navegador web.
echo '</h1>';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR'];       //  saca la direccion ip de mi cliente.
echo '</h1>';

?>