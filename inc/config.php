<?php
// Connexion à la base
$host = "localhost";
$user = "root";
$pass = "1992maxime";
$base = "gestion";

mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($base);

?>