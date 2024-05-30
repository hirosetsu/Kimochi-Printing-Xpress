<DOCTYPE html>
    <html>
        <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>
            KIMOCHI PRINTING XPRESS
            </title>
                <link rel="stylesheet" type="text/css" href="css/style.css">    
                <link rel="shortcut icon" href="images/fav-icon.png"/>
                    <script src="https://kit.fontawesome.com/43c421b643.js" crossorigin="anonymous"></script>
                    <script src = 'js/Home Page JS.js' defer></script>
                <link rel="shortcut icon" type="image/jpg" href="C:\Users\hp\Desktop\College\First Semester\Introduction To Web Technologies\Notepad ++ Files\Project\favicon.ico"/>
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
           <!--search-->
            <section id="search-banner">
                <div class="search-banner-text">
                    <h1>
                        Print Your Favorite Memories
                    </h1>
                    <strong>
                        #Free Delivery
                    </strong>
                    <form action="" class="search-box" id="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" class="search-input" placeholder="Search" name="search" size="90" required>
                        <input type="submit" class="search-btn" value="Search">
                    </form>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const searchIcon = document.querySelector(".like");
                            const searchForm = document.getElementById("search-box");
                    
                            // Focus on the search input when the icon is clicked
                            searchIcon.addEventListener("click", function(event) {
                                event.preventDefault();
                                const searchInput = searchForm.querySelector(".search-input");
                                searchInput.focus(); // Focus on the search input directly
                            });
                        });
                    </script>
                    <br>    
                    <h3>    
                        <a href = 'Best Deals HTML.html'style = 'color:#40aa54'>   
                            Click here to learn about today's best deals   
                        </a>    
                    </h3>    
                </div>   
            </section>   
            <h2 class = 'sale-heading'>   
                Fathers Day Sale is Live For  
            </h2>  
            <div class="countdown-container"> 
                <div class="countdown-el days-c">
                    <p class="big-text" id="days">0</p>
                    <span>Days</span>
                </div>
                <div class="countdown-el hours-c">
                    <p class="big-text" id="hours">0</p>
                    <span>Hours</span>
                </div>
                <div class="countdown-el mins-c">
                    <p class="big-text" id="mins">0</p>
                    <span>Min</span>
                </div>
                <div class="countdown-el seconds-c">
                    <p class="big-text" id="seconds">0</p>
                    <span>Seconds</span>
                </div>
            </div>         
                
            <section id="popular-product">
                
                <div class="product-heading">
                    <h3>Popular Product</h3>
                   
                </div>
                          
                <div class="product-container">
                    
                    <div class="product-box">
                        <img alt="apple" src="photos/photo-A.jpg">

                        <strong>Chicago Bulls</strong>
                        <span class="quantity">S, L, M, XL, XXL</span>
                        <span class="price">&#8369; 200</span>

                        <a href="Shopping Cart HTML.html" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                    </div>
                    
                    <div class="product-box">
                        <img alt="chili" src="photos/photo-AA.jpg">
                        <strong>Blinky Shadows</strong>
                        <span class="quantity">S, L, M, XL, XXL </span>
                        <span class="price">&#8369; 200</span>
                        
                        <a href="Shopping Cart HTML.html" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                        
                     
                    </div>
                    
                    <div class="product-box">
                        <img alt="apple" src="photos/photo-B.jpg">
                        <strong>Midnight Wolves</strong>
                        <span class="quantity">S, L, M, XL, XXL</span>
                        <span class="price">&#8369; 200</span>
                        
                        <a href="Shopping Cart HTML.html" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                       
                        
                    </div>
                    
                    <div class="product-box">
                        <img alt="apple" src="photos/photo-BB.jpg">
                        <strong>Boston</strong>
                        <span class="quantity">S, L, M, XL, XXL</span>
                        <span class="price">&#8369; 200</span>
                        
                        <a href="Shopping Cart HTML.html" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                        
                    
                    </div>
                    
                    <div class="product-box">
                        <img alt="apple" src="photos/photo-C.jpg">
                        <strong>Dragon</strong>
                        <span class="quantity">S, L, M, XL, XXL</span>
                        <span class="price">&#8369; 200</span>
                        
                        <a href="#" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                        
                        
                    </div>
                    
                    <div class="product-box">
                        <img alt="apple" src="photos/photo-CC.jpg">
                        <strong>76ers</strong>
                        <span class="quantity">S, L, M, XL, XXL</span>
                        <span class="price">&#8369; 200</span>
                     
                        <a href="Shopping Cart HTML.html" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                        
                       
                    </div>
                </div>
            </section>
            
            <section id="popular-bundle-pack">
             
                <div class="product-heading">
                    <h3>Popular Products</h3>
                </div>
              
                <div class="product-container">
                    
                    <div class="product-box">
                        <img alt="pack" src="photos/photo-D.jpg">
                        <strong>Phoenix Suns</strong>
                        <span class="quantity">S, L, M, XL, XXL</span>
                        <span class="price">&#8369; 200</span>
                      
                        <a href="Shopping Cart HTML.html" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                      
                       
                    </div>
                    
                    <div class="product-box">
                        <img alt="apple" src="photos/soft1.jpg">
                        <strong>Soft Copies</strong>
                        <span class="quantity">A4, Short, Long</span>
                        <span class="price">&#8369;5-10/Page</span>
                        
                        <a href="Shopping Cart HTML.html" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                       
                       
                    </div>
                    
                    <div class="product-box">
                        <img alt="apple" src="photos/sticker1.jpg">
                        <strong>Motor Stickers</strong>
                        <span class="quantity">Solo, Bundle</span>
                        <span class="price">&#8369; 50</span>
                        
                        <a href="Shopping Cart HTML.html" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                      
                       
                    </div>
                    
                    <div class="product-box">
                        <img alt="pack" src="photos/photo5.jpg">
                        <strong>JTS</strong>
                        <span class="quantity">S, L, M, XL, XXL</span>
                        <span class="price">&#8369; 200</span>
                      
                        <a href="Shopping Cart HTML.html" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                        
                     
                    </div>
                    
                    <div class="product-box">
                        <img alt="apple" src="photos/svnr12.jpg">
                        <strong>Wedding Mug</strong>
                        <span class="quantity">S, L, M</span>
                        <span class="price">&#8369; 120</span>
                        
                        <a href="Shopping Cart HTML.html" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                        
                        <a class="like-btn">
                            <i class="far fa-heart"></i>
                        </a>
                    </div>
                   
                    <div class="product-box">
                        <img alt="apple" src="photos/svnr7.jpg">
                        <strong>Puppy Love</strong>
                        <span class="quantity">S, L, M</span>
                        <span class="price">&#8369; 120</span>
                       
                        <a href="Shopping Cart HTML.html" class="cart-btn">
                            <i class="fas fa-shopping-bag"></i> Add to Cart
                        </a>
                        
                       
                    </div>
                </div>
            </section>
            
            <section id="clients">
                
                <div class="client-heading">
                    <h3>What Our Clients Say</h3>
                </div>
                
                <div class="client-box-container">
                  
                    <div class="client-box">
                        
                        <div class="client-profile">
                         
                            <img src="photos/dagway.png" alt="">
                            
                            <div class="profile-text">
                                <strong>James Hiro</strong>
                                <span>CEO</span>
                            </div>
                        </div>
                   
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        
                        <p>Kimochi Printing Express offers top-quality stickers and souvenirs. Their seamless digital-to-print service and quick turnaround for motorcycle plate numbers are impressive. Highly recommend for reliable printing in Panabo City!</Str></p>
                    </div>
                    
                    <div class="client-box">
                        
                        <div class="client-profile">
                            
                            <img src="photos/dagway.png" alt="">
                           
                            <div class="profile-text">
                                <strong>Hazel Brown</strong>
                                <span>Software Developer</span>
                            </div>
                        </div>
                        
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        
                        <p>Exceptional service! Kimochi Printing Express delivers vibrant stickers and personalized souvenirs with precision. Convenient location and prompt customer service make them Panabo City's go-to printing provider. Great experience overall!</p>
                    </div>
                  
                    <div class="client-box">
                        
                        <div class="client-profile">
                         
                            <img src="photos/dagway.png" alt="">
                          
                            <div class="profile-text">
                                <strong>Mae Spark</strong>
                                <span>Marketer</span>
                            </div>
                        </div>
                        
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                      
                        <p>Since 2020, Kimochi Printing Express has consistently provided high-quality printing services. Their expertise in sublimation and quick digital-to-print transformations ensure satisfaction. Excellent customer service in Panabo City!</p>
                    </div>
                </div>
            </section>
          
            
    
        <section id="contact-section" class="contact-bg" style="background-color: #407149;">
            <div class="container contact-wrapper">
                <div class="contact-content">
                    <div class="title-content">
                        <h1>Subscribe To Our Newsletter</h1>
                       
                    </div>
                    <form action="" for="email" id="subscribe-cta">
                        <input type="text" id="email" name="email" placeholder="Enter your email address">
                        <input type="submit" id="submit" value="Subscribe">
                    </form>
                </div>
    
                
            <div class="container contact-form-wrapper" style="background-color: white;box-shadow: 0px 3px 30px rgba(0,0,0,0.5);">
                <div class="contact-left">
                   
                    <div class="contact-header">
                        <p class="area-name">Contact</p>
                        <h1 class="c-title">Get in touch!</h1>
                        <p class="c-description">
                            With Kimochi Printing Xpress 
                        </p>
                    </div>
    
                    
                    <div class="contact-list">
                        <div class="c-call">
                            <span><i class="fa-solid fa-phone"></i></span>
                            <p>+639267260441</p>
                        </div>
                        <div class="c-email">
                            <span><i class="fa-solid fa-at"></i></span>
                            <p>kimochiprintingx@gmail.com</p>
                        </div>
                        <div class="c-address">
                            <span><i class="fa-solid fa-location-dot"></i></span>
                            <p>Panabo, Philippines, 8105</p>
                        </div>
                    </div>
    
                    
                    <div class="social-icons">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-tiktok"></i>
                    </div>
                </div>
    
                <form action="" for="email" id="contact-right">
                    <p class="pre-msg">Feel free to drop a message</p>
                    <input type="text" id="first-name" name="name" placeholder="Enter name" required style="background-color: rgb(226, 224, 224);">
                    <input type="email" id="contact-email" name="email" placeholder="Enter email" required style="background-color: rgb(226, 224, 224);">
                    <textarea name="text" id="comment-box" cols="30" rows="7" form="contact-right" placeholder="Your message..." style="background-color: rgb(226, 224, 224);"></textarea>
                    <input type="submit" id="c-submit" value="Send Message" style="background-color: #407149;">
                </form>
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
        </body>
    </html>
    