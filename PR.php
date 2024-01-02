<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $IngredientName = $_POST['IngredientName'];
    $IngredientAmmount = $_POST['IngredientAmmount'];
    $NumberOfServings = $_POST['NumberOfServings'];
    $CookTime = $_POST['CookTime'];

    $sql = "INSERT INTO addresipe (IngredientName, IngredientAmmount, NumberOfServings, CookTime) VALUES ('$IngredientName', '$IngredientAmmount', '$NumberOfServings', '$CookTime')";

    if ($conn->query($sql) === TRUE) {
        echo "Recipe added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

// Redirect to view_recipes.php after processing the recipe
header("Location: view_recipes.php");
?>
