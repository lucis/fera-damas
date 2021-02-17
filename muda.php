<?php
//our connection
mysql_connect("localhost","root","");
mysql_select_db("fera");

// convert code

$oi = mysql_query("ALTER TABLE horario CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci");

?>