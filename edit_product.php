<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Product</title>

    <style>
      .container{
        margin: 20px;
        background-color: #ecf7ee;
        height: 500px;
        border-radius: 20px;
        padding: 20px;
        display: flex;
        align-items: flex-start;
      }
      .container h2{
        text-align: center;
      }
      .container label{
            font-size: 20px;
            margin-top: 10px;
      }
      .container input{
          border: none;
          width: 550px;
          font-size: 20px;
          padding: 10px;
          border-radius: 10px;
          background-color: rgb(226, 224, 224);
      }
      #description{
        width: 550px;
        height: 100px;
        border: none;
        background-color: rgb(226, 224, 224);
      }
      .btn input{
        background-color: #4eb060;
        width: 200px;
      }
      .btn input:hover{
        background-color: #5ccf71;
        transition: all ease 0.3s;
      }
      .add-items{
        margin: 60px;
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

    <?php
    // Connect to the database (replace DB_HOST, DB_USER, DB_PASS, and DB_NAME with your actual database credentials)
    $mysqli = new mysqli("localhost", "root", "", "kimochi_db");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Check if the product ID is provided in the URL
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        
        // Query to select the product with the given ID
        $sql = "SELECT * FROM products WHERE id = $id";
        $result = $mysqli->query($sql);

        // Check if the product exists
        if ($result->num_rows > 0) {
            $product = $result->fetch_assoc();
    ?>
      <div class="container">
        <div class="form-container">
        <h2>Edit Product</h2>
          <form action="update_product.php" method="post">
              <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
              <label for="name">Product Name:</label><br>
              <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>"><br>
              
              <label for="description">Description:</label><br>
              <textarea id="description" name="description"><?php echo $product['description']; ?></textarea><br>
              
              <label for="price">Price:</label><br>
              <input type="text" id="price" name="price" value="<?php echo $product['price']; ?>"><br>
              
              <div class= "btn">
                <input type="submit" value="Update Product">
              </div>
          </form>
        </div>
          <div class="add-items">
            <label for="productImages">Images:</label>
            <input type="file" id="productImages" name="productImages[]" multiple accept="image/*" required><br>
            <div class="image-preview" id="imagePreview"></div>
        </div>
      </div>
    <?php
        } else {
            echo "Product not found.";
        }
    } else {
        echo "Product ID not provided.";
    }

    // Close the database connection
    $mysqli->close();
    ?>
    <script>
         document.getElementById('productImages').addEventListener('change', function() {
            var imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = ''; // Clear any previous images

            for (var i = 0; i < this.files.length; i++) {
                var file = this.files[i];

                if (file.type.startsWith('image/')) {
                    var reader = new FileReader();

                    reader.onload = function(event) {
                        var img = document.createElement('img');
                        img.src = event.target.result;
                        imagePreview.appendChild(img);
                    }

                    reader.readAsDataURL(file);
                }
            }
        });
    </script>
</body>
</html>
