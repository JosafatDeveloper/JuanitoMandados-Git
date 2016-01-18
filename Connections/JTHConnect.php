<?php
/*
 *
 *
 * Juanito te hace los mandados
 * version: 1.0
 * site:juanitomandados.com
 * proyect:Sistema de pedidos multiples
 * autor:Josafat M. Vargas Origuela
 * developer:Josafat M. Vargas Origuela
 * create:9-Enero-2016
 * file: JTHConnect.php
 * title: Connect Data MYSQL
 *
 *
 */
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_JHM = "topfotografosbodasme.fatcowmysql.com";
$database_JHM = "juanito_bd";
$username_JHM = "juanito_bd";
$password_JHM = "Developer098*";
$JHM_bd = mysql_pconnect($hostname_JHM, $username_JHM, $password_JHM) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $JHM_bd);
?>