<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>
        video upload
    </title>
    <style>
        
        body{
           padding-left: 500px;
           padding-right:500px;
           padding-bottom:500px;
           background-color: skyblue;
        }
        video {
            width: 300px;
            height: 300px;
        }
        input{
            text-decoration:
        }
        .Recipe{
            max-width: 600px;
            margin:0 auto;
            padding:50px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        }
        .form-group{
            margin-bottom: 30px;
        }

    </style>

</head>
<body> 
   <div class="navbar"> 
    <div class="img22">
</div>
   <img src="images/Logo.png" alt="">
   
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="view.php">videos</a></li>
  <li><a href="view_recipes.php">View Recipes</a></li>
</div>
<div class="Recipe">
<h1>Add a New Recipe</h1>
    
    <form action="process_recipe.php" method="post">
    <div class="form-group">
        <label for="Recipe">Recipe:</label>
        <input type="text" class="form-control" name="Recipe" required><br>
    </div>
    <div class="form-group">
        <label for="description">description:</label>
        <input name="description" class="form-control" required></textarea><br>
    </div>
    <div class="form-group">
        <label for="Tags">Tags:</label>
        <input name="Tags"   class="form-control" required></textarea><br>
    </div>
    <div class="form-group">
        <input type="submit" class="form-control" value="Submit">
    </div>
    </form>   
            <h1>Add videos</h1> 
            <div class="form-group">
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" class="form-control" name="my_video"><br><br>
            <input type="submit" class="form-control" name="submit" value="SUBMIT VIDEO">
</div>
</form>      
 </body>
</html>