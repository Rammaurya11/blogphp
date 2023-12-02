<?php

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
   
    .wapper{
        max-width:1400px;
        margin-right: auto;
        margin-left: auto;
        
    }
    .header{
        
    height: 64px;
    width: 100%; 
    background-color:rgba(10,10,10,0.4);

    }
    .header1{
        display: flex;
    align-items: center;
    justify-content: space-between;
    height: 64px;
    width: 100%; 
    }
   .logo img{
    height:52px;
    width:80px;
    margin-left:20px;

   }
   .sss{
    height:42px;
    color:black;
   }
   .c-n h2{
    color:black;
   }
   .ua{
    display:flex;
    align-items:center;
    gap:20px;
    margin-right:20px;

   }
   .ua button{
    font-size:20px;
    color:white;
    border-radius:10px;
    background-color:rgb(2,3,100);
   }
</style>
<body>

<div class="header">
    <div class="wapper">
        <div class="header1">
    <div class="logo">
        <a href="index.php"><img src="https://png.pngtree.com/png-vector/20230324/ourmid/pngtree-vlog-logo-design-template-vector-png-image_6665579.png" alt=""></a>

    </div>
    <div class="c-n">
        <h2>Sk blogs</h2>
    </div>
    <div class="ua">
   
<a href="logout.php"><button>Log out</button></a>
<a href="deshbord-check.php"><button>Dashboard </button></a>
  

</div>
  </div>
</div>
</div>

</body>
</html>