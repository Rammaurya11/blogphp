<?php
require_once('_db.php');
$id=$_GET['id'];
$query="DELETE FROM comments WHERE id='$id'";
$result=mysqli_query($db,$query);
header('location:cumment.php');

?>