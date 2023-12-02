<?php
session_start();
$user=($_SESSION['user']);
if($user['type']=='admin'){

    header("location:admin.php");
}
else{
    header("location:user.php");

}

 
?>
