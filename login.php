<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
          
           if(isset($_SESSION['uname'])){
              
              require_once ("header2.php");
      }
             else{
              require_once ("header.php");
         
              } 
         
      
       
   ?>
    <form id="fom" action="login-server.php" method="POST">
    <h3>
    <?php 
    if(isset($_GET['msg'])){
        echo $_GET['msg'];
    }
    ?>

    </h3> 
        <input type="text" name="uname" placeholder="Enter user name" required>
        <input type="password" name="pass" placeholder="Enter user password" required>
        <input type="submit" id="btn" name="submit" >
    </form>
</body>
<style>

    body{
            display: flex;
            flex-direction:column;
            align-items:center;
            gap:42px;
            background-image: url(https://images.unsplash.com/photo-1493723843671-1d655e66ac1c?q=80&w=1000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGxvZ2lufGVufDB8fDB8fHww);
            background-repeat: no-repeat;
            background-attachment:fixed;
           background-size:cover;
        }
        #fom{

            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            display: flex;
            width: 400px;
            background-color: rgba(10,10,10,0.5);
            padding:10px;
            gap:20px;
            border-radius:10px;

        }
        input{
            height:42px;
            width:380px;
            font-size:20px;
            border-radius:10px;

        }
        #btn{
            margin-top:50px;
            background-color: green;
            width:300px;
        }
        h3{
            color: red;
        }
</style>
</html>