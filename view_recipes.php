
<?php
include 'db.php';

$sql_addrec = "SELECT * FROM addrec";
$result_addrec = $conn->query($sql_addrec);

$sql_addresipe = "SELECT * FROM addresipe";
$result_addresipe = $conn->query($sql_addresipe);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View</title>
    <style>
        body {
            background-color: #f4f4f4; /* Light gray background color */
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }

        video {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .navbar {
            background-color: #343a40; /* Dark background color for the navbar */
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
        }

        .navbar li {
            margin: 0 15px;
        }

        .alb {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff; /* White background for the recipe section */
            border-radius: 8px;
        }

        .alb h2 {
            color: #333; /* Dark text color for headings */
        }

        .alb h3 {
            color: #555; /* Slightly darker text color for subheadings */
        }

        .alb p {
            color: #777; /* Lighter text color for paragraphs */
        }
    </style>
</head>
<body>
    <div class="navbar"> 
        <h1>View Recipes</h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="view.php">Add videos</a></li>
            <li><a href="Recipes.php">Add Ingredients</a></li>
        </ul>
    </div>
    <div class="alb">
        <?php
        // Display results for addrec
        if ($result_addrec->num_rows > 0) {
            while ($row = $result_addrec->fetch_assoc()) {
                echo "<h2>" . $row["Recipe"] ."</h2>";
                echo "<h3><strong>Description:</strong> " . $row["description"] . "</h3>";
                echo "<p><strong>tags:</strong> " . $row["Tags"] . "</p>";
                echo "<p><strong>directions:</strong> " . $row["Directions"] . "</p>";
            }
        } else {
            echo "<p>No Posted recipes</p>";
        }

        // Display results for addresipe
        if ($result_addresipe->num_rows > 0) {
            while ($row = $result_addresipe->fetch_assoc()) {
                echo "<h2>" . $row["IngredientName"] ."</h2>";
                echo "<h3><strong>ingredientAmmount:</strong> " . $row["IngredientAmmount"] . "</h3>";
                echo "<p><strong>numberOfServings:</strong> " . $row["NumberOfServings"] . "</p>";
                echo "<p><strong>cookTime:</strong> " . $row["CookTime"] . "</p>";
            }
        } else {
            echo "<p>No Posted Recipes.</p>";
        }

        $conn->close();
        ?>
    </div>
</body>
</html>