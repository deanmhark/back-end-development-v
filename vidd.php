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
body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    color: #495057;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
}

header {
    background-color: #343a40;
    padding: 20px 0;
    color: #fff;
    text-align: center;
}

.navbar {
    background-color: #343a40;
    overflow: hidden;
}

.navbar a {
    float: left;
    display: block;
    color: #f8f9fa;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: background-color 0.3s;
}

.navbar a:hover {
    background-color: #555;
}

.main-content {
    padding: 20px;
}

.Recipe {
    background-color: skyblue;
    padding: 30px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

.form-group {
    margin-bottom: 20px;
}

input[type="text"],
textarea {
    width: 100%;
    padding: 12px;
    margin-top: 8px;
    margin-bottom: 20px;
    box-sizing: border-box;
    border: 1px solid #ced4da;
    border-radius: 4px;
    background-color: #fff;
    color: #495057;
    transition: border-color 0.3s;
}

input[type="text"]:focus,
textarea:focus {
    border-color: #007bff;
}

input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

.footer {
    background-color: #343a40;
    color: #fff;
    padding: 20px 0;
    text-align: center;
}

/* Responsive design for smaller screens */
@media (max-width: 768px) {
    body {
        padding: 10px;
    }

    .navbar a {
        float: none;
        display: block;
        width: 100%;
        text-align: left;
    }
}
</style>
<body>
<div class="navbar"> 
    <div class="img22">
   <img src="images/Logo.png" alt="">
    </div>  
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="view.php">videos</a></li>
  <li><a href="view_recipes.php">Posts</a></li>
  <li><a href="Recipes.php">Add Recipes</a></li>
  <li><a href="imggg.php">Add Image</a></li>
</ul>
</div>
<div class="Recipe">
<h1>Add videos</h1> 
            <div class="form-group">
            <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" class="form-control" name="my_video" required><br><br>
            <input type="submit" class="form-control" name="submit" value="POST VIDEO">
</div>
</div>
</form>      
</body>
</html>