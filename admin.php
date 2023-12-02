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
        <a href="admin.php"><button> Article approve</button></a>
        <a href=""><button>ETC</button></a>
    </div>
    <div class="right">
<?php
    
    if(!isset($_SESSION['uname'])){
        header('Location:login.php?msg=Please Login First');
    }
  require_once ("_db.php");
  $query="SELECT * FROM article";
  $result=mysqli_query($db,$query);

?>

    <?php

   if(isset($_SESSION['uname'])){
      
      require_once ("header2.php");
}
     else{
      require_once ("header.php");
 
      } 
 
  ?>
        <?php
    while($row=mysqli_fetch_assoc($result)){
    ?>
  
<div class="card">
    <div class="img"><img src="<?php echo $row['img']?>" alt=""></div>
    <div class="text">
        <div class="title"><?php echo $row['title']?></div>
        <div class="html"><?php echo $row['html']?></div>
        <div class="dis" ><?php echo $row['discription']?></div>
    </div>
    <div class="crad">
        <div class="bt"><?php echo $row['uname']?></div>
        <div class="bt"><?php echo $row['status']?></div>
        <div class="bt">
            <form action="article-aprove.php">
                <input type="hidden" name="id" value="<?php echo $row['id']?>">
                <input id="bt" type="submit" name="submit" value="Aprove now" >
            </form>
        </div>
        <div class="bt"  ><button id="bt" ><a style="font-size:15px, " href="article-delete.php?id=<?php echo $row['id']?>">Delete</a></button> </div>
    </div>
</div>
<?php
}
?>
 </div>
    </div>
</body>
<style>

        body{
                margin:0px;
                
            }
            .mane{
                display:flex;
                height:100%;
                background-color:darkgray; 
            }
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
                width:80vw;
                height:100%;
                background-color:#E9EDF0;
            }

        /* body{
            display:flex;
            flex-direction:column;
            gap:20px;
            align-items:center;

        } */

        .card{
            display: flex;
           margin-top:10px;
           margin-left:10px;
           border:1px solid black;
            height:300px;
            width:850px;
            border-radius:10px;
            background-color:gray;
        }
        .img{
            height:300px;
            width:250px;
            background-color:#D2E6FD;  
            border-radius:10px 0px 0px 10px ;

        }
        .img img{
            height:280px;
            width:230px;
            margin:10px;
            border-radius:10px;
        }
        .text{
            height:300px;
            width: 500px;
            background-color:#D2E6FD;
        }
        .title{
            display:flex;
            align-items:center;
            justify-content:center;
            height:62px;
            width: 500px;
            font-size:25px;
        }
        .html{
            height:155px;
            width: 500px;
            padding:10px;
            overflow-x:auto;
        }
        .text .dis{
            height:62px;
            width: 500px;
            overflow-x:auto;
            margin-left:10px;
            color:red;

        }
        .crad{
        
            height:300px;
            width: 100px;
            border-radius:0px 10px 10px 0px;

            background-color:#D2E6FD;

        }
        .bt{
            display:flex;
            align-items:center;
            justify-content:center;
            height:25%;
            width:auto;
        }
        table{
                border:1px;

            }
            .div{
                display: flex;
                height:32px;
                width:100%;
                background-color:green;
            }
            
        #bt{


            height:32px;
                width:90px;
                background-color:red;
        }
        a{
            text-decoration:none;
            color:black;

        }
</style>

   

</html>