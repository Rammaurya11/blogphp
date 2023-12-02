<?php
session_start();
// require_once ('full-blog-server.php');
require_once ("_db.php");

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
        $id = $_GET['id'];
        $query = "SELECT * FROM `article` WHERE id=$id";
        $row = mysqli_query($db,$query);
        while($s=mysqli_fetch_assoc($row)){
          
?>
<div class="blog">
    <div class="img">
        <img src="<?php echo $s['img']?>" alt="">
    </div>
   
    <div class="blo">
        <div class="title"><h2><?php echo $s ['title']?></h2></div>
        <div class="title"><?php echo $s ['html']?></div>

    </div>

    </div>  
</div>
<?php
}
?>
<?php
if(isset($_SESSION['uname'])){
?>

<div class="comments">
    <form  action="cument-send.php" method="post">
        <h3>Coment here</h3>
        <input type="text" id="valu" name="article" value="<?php echo $_GET['id']?>">
        <textarea name="text" id="" cols="30" rows="5"></textarea>
        <input type="submit" id="submit" value="submit" name="submit">
        
    </form>
  


    
    <?php  
    require_once ("_db.php");
    $article=$_GET['id'];
    
    
    $query = "SELECT * FROM comments WHERE article='$article' AND status='approve'";
    $result = mysqli_query($db,$query);
    while($row=mysqli_fetch_assoc($result)){
    ?>
        <h2><?php echo $row['uname']?></h2>
        <h5><?php echo $row ['text']?></h5>

    <?php
  }
    ?>
      <?php
  }
  else{
    ?>



<?php  
    require_once ("_db.php");
    $article=$_GET['id'];
    
    
    $query = "SELECT * FROM comments WHERE article='$article' AND status='approve'";
    $result = mysqli_query($db,$query);
    while($row=mysqli_fetch_assoc($result)){
    ?>
        <h2><?php echo $row['uname']?></h2>
        <h5><?php echo $row ['text']?></h5>

    <?php
  }
  ?>


<?php
    }
    ?>
</div>

</body>
<style>
        body{
        margin: 0px;

    }
    a{
        text-decoration:none;
        color:black;
        margin-right:10px;
    }
    .blog{
    width: 100vw;
    height: auto;

    }

    img{
        height: 400px;
        width: auto;
        padding: 10px;
        border-radius:20px;

    }
    .blo{
        padding: 10px;
    }
    .comments{
        width: 100vw;
        padding: 10px;


    }
    textarea{
        width: 100%;
    }
    #submit{
        background-color: green;
        font-size: 18px;
    }
    #valu{
        display: none;
    }
    
</style>

</html>
