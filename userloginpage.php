<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hzalidb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT pname,image,price from products";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<link rel="icon" type="image/x-icon" href="./images/headerimg.jpg">
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Gallery</title>
    <style>
        body {
			background-color: LightGray;
            font-family: Arial, sans-serif;
			margin: 0;
        }
		.topnav {
  overflow: hidden;
  background-color: #494E50;
}
 .a
   {
      position: absolute;
      left: 525px;
	  background-color: #04AA6D;
	  border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
   }
    .b
   {
      position: absolute;
      left: 775px;
	  background-color: #04AA6D;
	  border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
   }
    .c
   {
      position: absolute;
      left: 1025px;
	  background-color: #04AA6D;
	  border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
   }
    .d
   {
      position: absolute;
      left: 1275px;
	  background-color: #04AA6D;
	  border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
   }

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: DodgerBlue;
  color: white;
}
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            justify-content: center;
        }
        .product {
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            width: 200px;
            text-align: center;
            padding: 16px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }
        .product:hover {
            transform: scale(1.05);
        }
        .product img {
            max-width: 100%;
            height: auto;
            display: block;
            margin-bottom: 8px;
        }
        .product h2 {
            font-size: 18px;
            margin: 8px 0;
        }
        .product p {
            font-size: 14px;
            color: #555;
        }
        .product .price {
            font-size: 16px;
            font-weight: bold;
            color: #333;
            margin-top: 8px;
        }
    </style>
</head>
<body>
    <div class="topnav">
  <a class="active" href="userloginpage.php">Home</a>
  <a href="index.html"style="float: right;">Sign Out</a>
  <a href="sepet.html" style="float: right;">Orders</a>
</div><br><br><br><br><br>    
    <div class="gallery">
        <?php
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<div class='product'>";
                echo "<img src='" . htmlspecialchars($row["image"]) . "' alt='" . htmlspecialchars($row["pname"]) . "'>";
                echo "<h2>" . htmlspecialchars($row["pname"]) . "</h2><br>";
                echo "<p class='price'>$" . htmlspecialchars($row["price"]) . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No products found</p>";
        }
        $conn->close();
        ?>
		<br>
    </div><br>
	<a href="product1.html" class='a' >Product 1 </a>
	<a href="product2.html" class='b' >Product 2 </a>
	<a href="product3.html" class='c' >Product 3 </a>
	<a href="product4.html" class='d' >Product 4 </a>
	
</body>
</html>