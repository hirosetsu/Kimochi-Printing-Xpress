<?php
// Connect to your database (replace DB_HOST, DB_USER, DB_PASS, and DB_NAME with your actual database credentials)
$mysqli = new mysqli("localhost", "root", "", "kimochi_db");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    
    // Insert product into database
    $sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$description', '$price')";
    
    if ($mysqli->query($sql) === TRUE) {
        echo "Product added successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    
    // Close database connection
    $mysqli->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Add Product</title>

    <style>
        .container{
            margin: 20px;
            background-color: #ecf7ee;
            height: 550px;
            border-radius: 20px;
            padding: 20px;
            display: flex;
            align-items: flex-start;
            width: 97%;
            gap: 100px;

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
            width: 500px;
            font-size: 20px;
            padding: 10px;
            border-radius: 10px;
            background-color: rgb(226, 224, 224);
        }
        #add-btn{
            border: none;
            background-color: #4eb060;
            width: 200px;
        }
        #add-btn:hover{
            background-color: #5ccf71;
            transition: all ease 0.3s;
        }
        a{
            color: black;
            font-size: 20px;
        }
        #description{
            width: 500px;
            height: 100px;
            background-color: rgb(226, 224, 224);
            border: none;
            border-radius: 10px;
        }
        button{
            border: none;
            border-radius: 10px;
            background-color: #5ccf71;
            padding: 5px;
            width: 50px;
        }
        .add-items{
            width: 80px;
            margin-top: 30px;
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

<div class="container">
        <div class="form-container">
            <h2>Add a New Product</h2>
            <form action="add_product.php" method="post" enctype="multipart/form-data">
                <label for="name">Product Name:</label><br>
                <input type="text" id="name" name="name"><br>
                
                <label for="description">Description:</label><br>
                <textarea id="description" name="description"></textarea><br>
                
                <label for="price">Price:</label><br>
                <input type="text" id="price" name="price"><br>

                <input id="add-btn" type="submit" value="Add Product"><br>

                <a href="list_product.php"><button type="button">Back</button></a>
            </form>
        </div>
        <div class="add-items">
            <label for="productImages">Images:</label>
            <input type="file" id="productImages" name="productImages[]" multiple accept="image/*" required><br>
            <div class="image-preview" id="imagePreview"></div>
        </div>
    </div>
        
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
