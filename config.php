<?
# SECURE -----------------
if(!$home) exit;

# CONFIG MYSQL -------------------
$_CONFIG['database']='';
$_CONFIG['datahost']='localhost';
$_CONFIG['datalogin']='root';
$_CONFIG['datapass']='';

# MYSQL CONNECTION -------------------
mysql_connect($_CONFIG['datahost'], $_CONFIG['datalogin'], $_CONFIG['datapass']) or die(mysql_error());
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER SET utf8_polish_ci");
mysql_query("SET collation_connection = utf8_polish_ci");
mysql_select_db($_CONFIG['database']) or die(mysql_error());

?>