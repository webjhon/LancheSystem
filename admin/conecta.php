<?php
$host_mysql = "localhost";
$user_mysql = "root";
$password_mysql = "";
$banco_mysql = "lancheria";
$conecta = mysql_connect($host_mysql, $user_mysql, $password_mysql) or print(mysql_error());
mysql_set_charset("utf8", $conecta);
mysql_select_db($banco_mysql, $conecta) or print(mysql_error());
