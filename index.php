<?php
require_once ("_db.php");
$query= "SELECT * FROM article WHERE status='approve'";
$result=mysqli_query($db,$query);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body{
       margin:0px;

    }
    .abcd{
        display: flex;
        gap: 20px;
        justify-content: center;
        align-items:center;
        margin: 0px;
        flex-wrap: wrap;
    }
    a{
        text-decoration: none;
        color: black;

    }
    .card{
        padding: 10px;
        height: 400px;
        width: 300px;
        border: 1px solid black;
        flex-wrap: wrap;
        gap: 5px;
        border-radius:10px;
        background: linear-gradient(to bottom,  rgba(235,233,249,1) 0%,rgba(216,208,239,1) 50%,rgba(206,199,236,1) 51%,rgba(193,191,234,1) 100%);

    }
    .img{
        height: 200px;
    }
    img{
        height: 200px;
        width: 100%;
        border-radius:10px;
    }
    .t{
        margin-top: 5px;
        height: 168px;
        width: 100%;
        overflow-x: auto;
    }
    .text{
        position: relative;
        height: 180px;

    }
    .uname{
        position: absolute;
        bottom: -14px;
        height: 32px;
        width: 100%;
    }

</style>
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
<div class="abcd">
    <?php
        while($row=mysqli_fetch_assoc($result)){
    ?>
    <a href="full-blog.php?id=<?php echo $row['id']?>">

    <div class="card">
        <div class="img">
            <img src="<?php echo $row ['img'] ?>" alt="">
        </div>
        <div class="text">
           <div class="t">
                <div class="title"><h1><?php echo $row['title'] ?></h1></div>
                <div class="html"><p><?php echo $row['discription'] ?></p></div>
            </div>
            <div class="uname"><p><?php echo $row['uname'] ?></p></div>
        </div>
    </div>
    </a>
    
        <?php
        }
        ?>
    </div>
</body>
</html>