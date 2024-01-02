<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>view</title>
    <style>

        body{
    
           background-color: skyblue;
        }
        video {
            width: 650px;
            height: 650px;
        }
        .alb{
            max-width: 800px;
            margin:0 auto;
            padding:50px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        
        .ul{

        }
     
        
    </style>
</head>
<body> 
   <div class="navbar"> 
    <div class="img22">
   <img src="images/Logo.png" alt="">
   </div>
<ul>
  <li><a href="index.php">Home</a></li>
   <li> <a href="Recipes.php">UPLOAD</a></li>
    <div class="alb">
<?php
         include "db_conn.php";
         $sql = "SELECT * FROM videos ORDER BY id DESC";
         $res = mysqli_query($conn, $sql);
 
         if (mysqli_num_rows($res) > 0) {
            while ($video = mysqli_fetch_assoc($res)) {  ?>
            <video src="uploads/<?=$video['video_url']?>"controls> </video>
            <h1>Video Uploaded</h1>
            <?php
            }

         }else {
            echo "<h1>No uploaded videos</h1>";
         }
        ?>

</body>
</html>