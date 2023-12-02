 <?php
session_start();
require_once("_db.php");

$uname = $_POST['uname'];
$pass = $_POST['pass'];

$query = "SELECT * FROM users WHERE uname = '$uname' AND pass = '$pass'";
$run = mysqli_query($db,$query);    

if($run->num_rows==0){
header("location:login.php?msg=Please Login First");
}
else{
    $user=mysqli_fetch_assoc($run);
    $_SESSION['user']=$user;
    $_SESSION['uname']=$uname;
    if($user['type']=='admin'){
        header("location:index.php");
    }
    else{
        header("location:index.php");
    }
}

//     $query1="SELECT * FROM users WHERE uname = '$uname' AND pass = '$pass' AND type ='admin'";
//     $run2 = mysqli_query($db,$query1);  
//     $save=mysqli_fetch_assoc($run2);
//     $_SESSION['s'] =$save;
//     if($run2->num_rows){
//             $_SESSION['uname'] = $uname;
//         header('location:index.php');
//     }else if(!$run2->num_rows){
//             $_SESSION['uname'] = $uname;
//         header('location:index.php');
//     }
// }
//  else {
//     // $_SESSION['uname'] = $uname;
//     header('Location:login.php?msg=Pleadse sign in fast');







?>