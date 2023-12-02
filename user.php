<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       session_start();
       if(isset($_SESSION['uname'])){
          
          require_once ("header2.php");
  }
         else{
          require_once ("header.php");
     
          } 
     
  
    ?>
    <div class="mane">
    <div class="left">
        <a href="user.php"><button> Article</button></a>
        <a href="cumment.php"><button> comment</button></a>
    </div>
    <div class="right">
        <?php
    if(isset($_SESSION['uname'])){
       
       require_once ("header2.php");
        }
      else{
       require_once ("header.php");
  
       } 
  

?>
<form id="fom" action="user-server.php" method="POST">
    <h2>
   
    
    </h2>
    <input type="text" name="img" placeholder="Inter image url" required >
    
    <input type="text" name="title"  placeholder="Inter title" required>
    <input type="text" name="html" placeholder="Inter html" required>
    <input type="text" name="discription" placeholder="Inter discription" required>

    <input id="btn" type="submit" name="submit">

</form>
<?php
header('location.user.php')

?>
</div>

</div>
    

<style>
    
    /* body{
            display: flex;
            justify-content: center;
            background-image: url(https://picsum.photos/id/7/1600/800);
            background-repeat: no-repeat;
            background-size: auto;
            height: 100vh;
        
            flex-wrap: wrap;
        } */
        #fom{

            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            display: flex;
            width: 400px;
            height:auto;
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
        h2{
            color: red;
        }
        body{
        margin:0px;
        
    }
    .mane{
        display:flex;
        background-color:darkgray; 
    }
    /* body{
                margin:0px;
                
            }
            .mane{
                display:flex;
                height:100%;
                background-color:darkgray; 
            } */
            .left{
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content:center; 
                gap:10px;
                width:20vw;
                height:100%;
               
            }
            .left button{

                display:flex;
                align-items:center;
                justify-content:center; 
                width:150px;
                
                background-color:rgb(2,3,100);
                color:white;
                height:32px;
                border-radius:5px;
            }
            
    .right{
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        
        width:80vw;
        height:100vh;
        background-color:#D2E6FD;
    }

</style>


</body>

</html>