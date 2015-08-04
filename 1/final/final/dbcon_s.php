<?php

$con = mysql_connect("localhost", "root", "");
if (!$con)
    die("Cannot Connect To The Server!");
$dbselect = mysql_select_db("eas_system", $con);
if (!$dbselect)
    die("Cannot Connect To The Database!");
?>