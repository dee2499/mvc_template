<?php
session_start();

require_once ('config.php');

$id=$_REQUEST["id"];

$query="UPDATE registration SET deleted=1 WHERE id=$id";
mysql_query($query);

?>