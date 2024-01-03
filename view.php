<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>View</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f0f8ff; /* Light blue background color */
        }

        .navbar {
            background-color: #3498db; /* Blue navbar background color */
            color: #fff; /* White text color */
            padding: 15px;
            text-align: center;
        }

        .navbar img {
            max-width: 100%;
            height: auto;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            background-color: #3498db; /* Blue navbar background color */
        }

        .navbar li {
            margin: 0 15px;
        }

        .alb {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff; /* White background for the video section */
            border-radius: 8px;
            text-align: center;
        }

        video {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h1 {
            color: #3498db; /* Blue color for headings */
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
            <li><a href="vidd.php">UPLOAD videos</a></li>
            <li><a href="Recipes.php">Add Recipes</a></li>
        </ul>
    </div>
    <div class="alb">
        <?php
            include "db_conn.php";
            $sql = "SELECT * FROM videos ORDER BY id DESC";
            $res = mysqli_query($conn, $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($video = mysqli_fetch_assoc($res)) {  ?>
                    <video src="uploads/<?=$video['video_url']?>" controls></video>
                    <h1>Video Uploaded</h1>
                <?php
                }

            } else {
                echo "<h1>No uploaded videos</h1>";
            }
        ?>
    </div>
</body>
</html>