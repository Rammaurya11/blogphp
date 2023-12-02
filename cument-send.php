<?php
session_start();
$db=mysqli_connect("localhost","root","","blog");
if(isset($_POST['submit'])){
$text = $_POST['text'];
$uname = $_SESSION['uname'];
$article = $_POST['article'];
$status = "pending";

// $staus = "Pending";
$query ="INSERT INTO comments (text, article,status,uname) VALUES ('$text','$article','$status','$uname')";
$run=mysqli_query($db,$query);
if($run->num_rows){
    $query1="INSERT INTO comments (text, article,status,uname) VALUES ('$text','$article','$status','$uname')";
    $run1=musqli_query($db,$query1);
    if($run2->num_rows){
        $_SESSION['uname'] = "admin";
    header('location:admin.php');
        }
    else if(!$run2->num_rows){
        $_SESSION['uname'] = $uname;
    header('location:index.php');
}
}
}
header("location:full-blog.php?id=$article");
?>