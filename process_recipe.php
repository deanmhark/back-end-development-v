<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Recipe = $_POST['Recipe'];
    $description = $_POST['description'];
    $Tags = $_POST['Tags'];
    $Directions = $_POST['Directions'];

    $sql = "INSERT INTO addrec (Recipe, description, Tags, Directions) VALUES ('$Recipe', '$description', '$Tags', '$Directions')";

    if ($conn->query($sql) === TRUE) {
        echo "Recipe added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
    // Redirect to view_recipes.php after processing the recipe
    header("Location: view_recipes.php");
    exit(); // Ensure that no further code executes after the header redirect
?>