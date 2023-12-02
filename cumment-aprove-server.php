<?php

    require_once ("_db.php");
    $id = $_GET['id'];  
    $query="UPDATE comments SET status='approve' WHERE id=$id";
    $rec= mysqli_query($db,$query);
  
    header ("location:cumment.php");
    ?>