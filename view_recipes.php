<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>view</title>
    <style>

        body{
    
           background-color: lightgreen;
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
    <?php
include 'db.php';

$sql = "SELECT * FROM addrec";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Recipes</title>
</head>
<body>
<div class="navbar"> 
    <h1>View Recipes</h1>
       
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="view.php">videos</a></li>
    </div>
    <div class="alb">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<h1>" . $row["Recipe"] ."</h1>";
            echo "<h3><strong>Description:</strong> " . $row["description"] . "</h3>";
            echo "<p><strong>tags:</strong> " . $row["Tags"] . "</p>";
            
        }
    } else {
        echo "<p>No recipes found.</p>";
    }

    $conn->close();
    ?>

</body>
</html>
