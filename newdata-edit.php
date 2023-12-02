<?php

require_once ('_db.php');

    // $status = $_POST['status'];

$id = $_GET["id"];
$query = "UPDATE artical SET  status='aprove' WHERE id='$id'";

$result = mysqli_query($db,$query);  
    header("Location: newproduct.php");


