
<?php
require_once ("_db.php");

$uname = $_POST['uname'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
$img=$_POST['img'];
$job=$_POST['job'];

if($pass != $repass){
    header('Location:signup.php?msg=Passwords do not match');
}
else{
    $query = "SELECT * FROM users WHERE uname = '$uname'";
    $run = mysqli_query($db,$query);
    
    if($run->num_rows == 0){
        $query1 = "INSERT INTO users (uname,pass,img,job) VALUES('$uname','$pass','$img','$job')";
        $run1 = mysqli_query($db,$query1);
        header('Location:login.php?msg=regestration successfull');
    } else {
        header('Location:signup.php?msg=Are you alrady avelebal');
    }
}
