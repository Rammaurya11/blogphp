<?php
session_start();
require_once('_db.php');
$img =$_POST['img'];
$title =$_POST['title'];
$html =$_POST['html'];
$discription =$_POST['discription'];
$uname = $_SESSION['uname'];
$status = "pending";

if($title == ""){
    $_session["msg"] = "Title is requred";
} else if($html == ""){
    $_SESSION["msg"] = "HTML is requred";
} else if($discription == ""){
    $_SESSION["msg"] = "Discription is requred";
} else if($img == ""){
    $_SESSION["msg"] = "Image is requred";
}else{

$query ="INSERT INTO article( img,html,title,discription,uname,status) VALUES ('$img','$html','$title','$discription','$uname','$status')";
// echo "<pre>";
// print_r ($query);
mysqli_query($db,$query);

header('location:index.php');
}
?>
