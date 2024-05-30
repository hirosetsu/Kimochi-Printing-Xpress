<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Product List</title>
    <style>
        table {
            border-collapse: collapse;
            width: 97%;
            margin: 20px;
        }
        th, td {
            border: 2px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .cons{
          text-align: center;
        }
        button{
          margin: 20px;
          font-size: 15px;
          background-color: #4eb060;
          padding: 10px;
          border: none;
          border-radius: 10px;
        }
        button:hover{
          background-color: #5ccf71;
          transition: all ease 0.3s;
        }
    </style>
</head>
<body>
    <div class="allnav">
        <!--==Navigation================================-->
        <nav class="navigation">
            <div class="title" style="width:1300px; float:left;">
                <a href="#" class="logo">
                    <span> KIMO</span>CHI
                </a>
            </div>
                
        </nav>
    </div>
    <div class="cons">
      <h2>Product List</h2>
    </div>
    <table>
        <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        <a href="add_product.php"><button type="button">Add Product</button></a>
        <?php
        // Connect to the database (replace DB_HOST, DB_USER, DB_PASS, and DB_NAME with your actual database credentials)
        $mysqli = new mysqli("localhost", "root", "", "kimochi_db");

        // Check connection
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Query to select all products
        $sql = "SELECT * FROM products";
        $result = $mysqli->query($sql);

        // Check if there are products
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["description"] . "</td>";
                echo "<td>$" . $row["price"] . "</td>";
                echo "<td><a href='edit_product.php?id=" . $row["id"] . "'>Edit</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No products found.</td></tr>";
        }

        // Close the database connection
        $mysqli->close();
        ?>
    </table>
</body>
</html>
