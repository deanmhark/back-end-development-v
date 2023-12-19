<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;900&display=swap" rel="stylesheet">
    <style>
        .navbar {
  width: 85%;
  margin: auto;
  padding: 35px 0;
  display: flex;
  align-items: center;
  justify-content: space-between;
} 
.navbar ul li {
  list-style: none;
  display: inline-block;
  margin: 0 3px;
  position: relative;
}
.navbar ul li a {
  text-decoration: none;
  color: #f0e9e9;
  text-transform: uppercase;
  font-weight: bolder;
  color: #FFFFE5;

  font-size: 20px;
}

.navbar ul li::after {
  content: "";
  height: 3px;
  width: 0;
  background: #FFFFE5;
  position: absolute;
  left: 0;
  bottom: -10px;
  transition: 0.5s;
}

.navbar ul li:hover::after {
  width: 100%;
}
.samp1{
            background-image: url(images/s1.png);
            background-size: cover;
        }
        .vid{
            text-align:center;
        }
        h1{
            color: white;
        }
    </style>
</head>
<body class="samp1">
<div class="navbar"> 
<ul>
  <li><a href="index.php">Home</a></li>
 </div>
<div class="vid">
    <h1> WATCH VIDEO </h1>
<video width="700" height="500" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="videos/karekare.mp4" type="video/ogg">
</video>
    </div>
</div>
</body>
</html>