<?php
mysql_select_db('gotm');
mysql_connect('localhost', 'root', '') or die(mysql_errno());
$result = mysql_query("select * from `gotm`");
print_r($result);
?>