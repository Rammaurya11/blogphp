<?php
 session_start();
require_once("_db.php");
$id = $_GET["id"];
$query = "UPDATE article SET status='approve' WHERE id=$id ";
$res = mysqli_query($db, $query);
header("location:admin.php?msg=Success");

// $row = mysqli_fetch_assoc($res);
// $id = $row["id"];
?>