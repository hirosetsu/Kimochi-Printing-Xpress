<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> KIMOCHI PRINTING XPRESS </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="images/fav-icon.png"/>
    <script src="https://kit.fontawesome.com/43c421b643.js" crossorigin="anonymous"></script>
    <script src = 'js/shop.js' defer></script>
    <link rel="shortcut icon" type="image/jpg" href="C:\Users\hp\Desktop\College\First Semester\Introduction To Web Technologies\Notepad ++ Files\Project\favicon.ico"/>
    <link rel="stylesheet" href="css/shop.css">
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

<section id="product1" class="section-p1">
    <h2>Products</h2>
    <p>Shop now</p>
    
    <div class="pro-container">
        <div class="pro">
            <img src="photos/photo-S.jpg" alt="">
            <div class="des">
                <h5>Charlotte Hornets</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$49.00</h4>
            </div>
            
            <button class="addtoCart-btn" data-name="Charlotte Hornets" data-price="49.00" data-img="photos/photo-S.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        
        <div class="pro">
            <img src="photos/photo-T.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Miami Summer</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$45.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Miami Summer" data-price="45.00" data-img="photos/photo-W.jpg" onclick="addtoCart(this)">Add to Cart</button>

        </div>
    
        <div class="pro">
            <img src="photos/photo-W.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Memphis Grizzlies</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$47.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Memphis Grizzlies" data-price="49.00" data-img="photos/photo-X.jpg" onclick="addtoCart(this)">Add to Cart</button>

        </div>
        <div class="pro">
            <img src="photos/photo-X.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Los Angeles Clippers</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$50.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Los Angeles Clippers" data-price="50.00" data-img="photos/photo-Y.jpg" onclick="addtoCart(this)">Add to Cart</button>

        </div>
        <div class="pro">
            <img src="photos/photo-Y.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Chicago Bulls</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$55.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Chicago Bulls" data-price="55.00" data-img="photos/photo-Y.jpg" onclick="addtoCart(this)">Add to Cart</button>

        </div>
        <div class="pro">
            <img src="photos/photo-A.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Washington Wizards</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$59.00</h4>
            </div>
                
            <button class="addtoCart-btn" data-name="Washington Wizards" data-price="59.00" data-img="photos/photo-C.jpg" onclick="addtoCart(this)">Add to Cart</button>

    
        </div>
        <div class="pro">
            <img src="photos/photo-C.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>OKC Dragons</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$45.00</h4>
            </div>
            <button class="addtoCart-btn" id="addCart" data-name="OKC Dragons" data-price="45.00" data-img="photos/photo-BB.jpg" onclick="addtoCart(this)">Add to Cart</button>

        </div>
        <div class="pro">
            <img src="photos/photo-BB.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Boston Celtics</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$49.00</h4>
            </div>

            <button class="addtoCart-btn" data-name="Boston Celtics" data-price="49.00" data-img="photos/photo-B.jpg" onclick="addtoCart(this)">Add to Cart</button>

        </div>
        <div class="pro">
            <img src="photos/photo-B.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Midnight Wolves</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$48.00</h4>
            </div>

            <button class="addtoCart-btn" data-name="Boston Celtics" data-price="49.00" data-img="photos/photo-B.jpg" onclick="addtoCart(this)">Add to Cart</button>
           
        </div>

        <div class="pro">
            <img src="photos/photo-AA.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Blinky Shadows</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$55.00</h4>
            </div>

            <button class="addtoCart-btn" data-name="Blinky Shadows" data-price="55.00" data-img="photos/photo-CC.jpg" onclick="addtoCart(this)">Add to Cart</button>

            
        </div>

        <div class="pro">
            <img src="photos/photo-CC.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>76ers Philadelpia</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$57.00</h4>
            </div>

            <button class="addtoCart-btn" data-name="76ers Philadelpia" data-price="57.00" data-img="photos/photo-Q.jpg" onclick="addtoCart(this)">Add to Cart</button>

           
        </div>

        <div class="pro">
            <img src="photos/photo-Q.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Sacramento Kings</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$45.00</h4>
            </div>

            <button class="addtoCart-btn" data-name="76ers Philadelpia" data-price="57.00" data-img="photos/photo-Q.jpg" onclick="addtoCart(this)">Add to Cart</button>

           
        </div>

        <div class="pro">
            <img src="photos/sticker17.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Wings Star</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$20.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Wings Star" data-price="20.00" data-img="photos/sticker17.jpg" onclick="addtoCart(this)">Add to Cart</button>

        </div>

        <div class="pro">
            <img src="photos/sticker4.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Motorcycle Logo</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$15.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Motorcycle Logo" data-price="15.00" data-img="photos/sticker4.jpg" onclick="addtoCart(this)">Add to Cart</button>

        </div>

        <div class="pro">
            <img src="photos/sticker6.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Ninja 101</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$15.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Ninja 101" data-price="15.00" data-img="photos/sticker6.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/sticker25.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Motor Brand Logos</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$25.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Motor Brand Logos" data-price="25.00" data-img="photos/sticker25.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/sticker14.png" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Cool for you</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$25.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Cool for you" data-price="25.00" data-img="photos/sticker14.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/kpop.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>K-pop Idols</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$30.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="K-pop Idols" data-price="30.00" data-img="photos/kpop.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/gold.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Gold Metalic</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$35.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Gold Metalic" data-price="35.00" data-img="photos/gold.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/anime.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Anime Lovers</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$25.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Anime Lovers" data-price="25.00" data-img="photos/anime.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/pre.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Keychain</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$49.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Keychain" data-price="49.00" data-img="photos/pre.jpg" onclick="addtoCart(this)">Add to Cart</button>

        </div>

        <div class="pro">
            <img src="photos/pree.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Mug</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$45.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Mug" data-price="45.00" data-img="photos/pree.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/pur.webp" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Polaroid</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$47.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Palaroid" data-price="47.00" data-img="photos/pur.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/pir.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Key Holder</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$50.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Key Holder" data-price="50.00" data-img="photos/pur.jpg" onclick="addtoCart(this)">Add to Cart</button>

        </div>

        <div class="pro">
            <img src="photos/plates.webp" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->

                <h5>Display Sets</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$55.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Display Sets" data-price="55.00" data-img="photos/plates.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/por.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Ref Magnets</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$59.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Ref Magnets" data-price="59.00" data-img="photos/por.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/per.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Cute chain</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$45.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Cute chain" data-price="45.00" data-img="photos/per.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/cattt.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Kitty Mug</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$49.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Kitty Mug" data-price="49.00" data-img="photos/cattt.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

       

        <div class="pro">
            <img src="photos/soft1.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Notebooks</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$9.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Notebooks" data-price="9.00" data-img="photos/soft1.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/soft4.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Calendar</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$15.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Calendar" data-price="15.00" data-img="photos/soft4.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/por.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Study Guide</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$12.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Study Guide" data-price="12.00" data-img="photos/por.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

        <div class="pro">
            <img src="photos/soft9.jpg" alt="">
            <div class="des">
                <!-- <span>photo1</span> -->
                <h5>Receipt</h5>
                <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <h4>$19.00</h4>
            </div>
            <button class="addtoCart-btn" data-name="Receipt" data-price="19.00" data-img="photos/soft9.jpg" onclick="addtoCart(this)">Add to Cart</button>
        </div>

      
    </div>
</section>
<footer id="footer-section" style="background-color: #2A4747;">
    <div class="container footer-wrapper">
        <div class="footer-top-content">
            <div class="shop-time-address">
                <p class="open-time"><i class="fa-solid fa-clock"></i> Sun - Thru : 09:00 - 10:00</p>
                <p class="phone"><i class="fa-solid fa-phone"></i> +639267260441</p>
            </div>
        </div>

        <div class="footer-content">
            <div class="footer-left">
                <img src="photos/Logo (2).png" id="footer-logo" alt="">
                <div class="footer-socials">
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-tiktok"></i>
                </div>
            </div>

            <div class="footer-right">
                <div class="f-categories f-inner">
                    <h3>Categories</h3>
                    <ul class="footer-cat">
                        <li><a href="">Business Cards</a></li>
                        <li><a href="">Flyers</a></li>
                        <li><a href="">Banners</a></li>
                        <li><a href="">Posters</a></li>
                        <li><a href="">Labels</a></li>
                    </ul>
                </div>

                <div class="f-support f-inner">
                    <h3>Support</h3>
                    <ul class="footer-cat">
                        <li><a href="">Help & Support</a></li>
                        <li><a href="">Privacy & Policy</a></li>
                        <li><a href="">Trust & Safety</a></li>
                        <li><a href="">Account Issues</a></li>
                    </ul>
                </div>

                <div class="f-community f-inner">
                    <h3>Community</h3>
                    <ul class="footer-cat">
                        <li><a href="">Blog</a></li>
                        <li><a href="">Events</a></li>
                        <li><a href="">Feedback</a></li>
                    </ul>
                </div>

                <div class="f-services f-inner">
                    <h3>Services</h3>
                    <ul class="footer-cat">
                        <li><a href="">Payment Methods</a></li>
                        <li><a href="">Delivery</a></li>
                        <li><a href="">Returns</a></li>
                        <li><a href="">About</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <p class="copyright-text" style="margin: 0;" >Kimochi Printing Xpress &copy; 2024 | Created by Turiao, Romero, Lemorenas, Lulu</p>
    </div>
</footer>
<script src="./shop.js" type="text/javascript"></script>
</body>

</html>

        