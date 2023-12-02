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
    <?php
   

    require_once ("_db.php");
    $query ="SELECT * FROM comments";
    $result = mysqli_query($db,$query);
    
    ?>
   
    <table>
        <tr>
            <th>Id</th>
            <th>Text</th>
            <th>rticle</th>
            <th>Status</th>
            <th>Name</th>
        </tr>
        <?php while($r=mysqli_fetch_assoc($result)){?>
        <tr>
            <td><?php echo $r['id']?></td>
            <td><?php echo $r['text']?></td>
            <td><?php echo $r['article']?></td>
            <td><?php echo $r['status']?></td>
            <td><?php echo $r['uname']?></td>
            <td><form action="cumment-aprove-server.php">
                <input style="display:none;"type="text" name="id" value="<?php echo $r['id']?>" >
                <input type="submit" name="submit" value="Aprove now" >
            
            </td>
            
            <td>
                <a id="delete" href="cumment-delet-server.php?id=<?php echo $r['id']?>">DELET NOW </a>
            
            </td>        
        </tr>
        <?php
    }
    ?>

    </table>
    
</div>
</div>

   
</body>
<style>
    table ,th,td{
        border:1px solid black;
    }
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
        height:100vh;
        background-color:#D2E6FD;
    }
    #delete{
        text-decoration:none;
        color:white;
        background-color:red;
    }
</style>
</html>