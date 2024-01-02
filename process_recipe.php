<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Recipe = $_POST['Recipe'];
    $description = $_POST['description'];
    $Tags = $_POST['Tags'];

    $sql = "INSERT INTO addrec (Recipe, description, Tags) VALUES ('$Recipe', '$description', '$Tags')";

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

