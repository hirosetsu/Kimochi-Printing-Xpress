<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" type="text/css" href="css/Shopping Cart CSS.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/9088cc6401.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="allnav">
    <!--==Navigation================================-->
    <nav class="navigation">
        <div class="title" style="float: left; width: 800px;">
            <a href="#" class="logo">
                <span> KIMO</span>CHI
            </a>
        </div>
        <label for="menu-btn" class="menu-icon">
            <span class="nav-icon"></span>
        </label>
        <ul class="menu">
            <li>
                <a href="index.php" class="active">
                    Home
                </a>
            </li>      
            <li>      
                <a href="Shop.php">     
                    Shop                          
                </a>                      
            </li>                    
            <li>     
                <a href="About Us.php">      
                    About&nbsp;us      
                </a>      
            </li>
            <li>
                <a href="Login And Registration.php">
                    Login
                </a>
            </li>
            </ul>
        <div class="right-nav">
            <a href="cart.php" class="cart">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-count"></span>
            </a>
        </div>
    </nav>
</div>

    <div class="container"> 
        <div class="cart">
            <div class="products">
                <?php
                // Include PHP script to connect to database and fetch product data
                include 'Shopping Cart.php';

                // Check if products are fetched correctly
                if (!empty($products)) {
                    // Loop through fetched product data and display each product
                    foreach ($products as $product) {
                        echo '<div class="product">';
                        echo '<img src="' . htmlspecialchars($product['data-image']) . '" alt="' . htmlspecialchars($product['data-name']) . '">';
                        echo '<div class="product-info">';
                        echo '<h3 class="product-name">' . htmlspecialchars($product['data-image']) . '</h3>';
                        echo '<h4 class="product-price">$ ' . htmlspecialchars($product['data-price']) . '</h4>';
                        echo '<h4 class="product-offer">' . htmlspecialchars($product['discount']) . '</h4>';
                        echo '<p class="product-quantity">Qnt: <input type="number" value="1" name="quantity[' . htmlspecialchars($product['id']) . ']"></p>';
                        echo '<p class="product-remove">';
                        echo '<i class="fas fa-trash-alt"></i>';
                        echo '<span class="remove">Remove</span>';
                        echo '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                } else {
                    echo '<p>No products found.</p>';
                }
                ?>
            </div>
            <div class="cart-total">
                <!-- PHP code to calculate total price, number of items, and savings -->
                <?php
                include 'calculate_totals.php';
                echo '<p><span>Total Price</span><span>Rs. ' . htmlspecialchars($totalPrice) . '</span></p>';
                echo '<p><span>No. of Items</span><span>' . htmlspecialchars($totalItems) . '</span></p>';
                echo '<p><span>You Save</span><span>Rs. ' . htmlspecialchars($totalSavings) . '</span></p>';
                ?>
                <a href="Details For Checkout.php">Proceed to Checkout</a>
            </div>
        </div>
    </div>
</body>
</html>
