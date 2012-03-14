<?php // db.php
$db = mysql_connect("localhost", "jeff", "pass");
if ($db == FALSE) die('Fail message');
if (mysql_select_db("project")==FALSE) die ('Fail message:' . mysql_error());
?>