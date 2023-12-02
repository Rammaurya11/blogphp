<?php
require_once('_db.php');
$id=$_GET['id'];
$query="DELETE FROM article WHERE id='$id'";
$result=$db->query($query);
header('location:admin.php');

?>