<?php
// Connect to the database (replace DB_HOST, DB_USER, DB_PASS, and DB_NAME with your actual database credentials)
$mysqli = new mysqli("localhost", "root", "", "kimochi_db");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // Update product in the database
    $sql = "UPDATE products SET name='$name', description='$description', price='$price' WHERE id=$id";
    
    if ($mysqli->query($sql) === TRUE) {
        echo "Product updated successfully.";
    } else {
        echo "Error updating product: " . $mysqli->error;
    }
} else {
    echo "Form data not submitted.";
}

// Close the database connection
$mysqli->close();
?>
