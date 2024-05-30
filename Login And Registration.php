<!DOCTYPE html>

<!--This is a login page made up with HTML,CSS and javascript-->

<html>

    <head>

        <title>
            
            Login In/Sign Up
        
        </title>

        <link type="text/css" rel="stylesheet" href="css/Login And Registration CSS.css">

        <script src="https://kit.fontawesome.com/5471644867.js" crossorigin="anonymous"></script>
        
        <link rel="shortcut icon" type="image/jpg" href="C:\Users\hp\Desktop\College\First Semester\Introduction To Web Technologies\Notepad ++ Files\Project\favicon.ico"/>

    </head>

    <body>

        <section class="imp">

            <section>

            <div class="login show" id="one">

                <div class="textbox slide-left2">

                <div class="head">

                    <h1>
                        
                        Sign In to CGS
                    
                    </h1>

                    <ul>

                        <li>
                            
                            <i class="fab fa-facebook-f" style = "cursor: pointer;"></i>
                        
                        </li>

                        <li>
                            
                            <i class="fab fa-google-plus-g" style = "cursor: pointer;"></i>
                        
                        </li>

                        <li>
                            
                            <i class="fab fa-linkedin-in" style = "cursor: pointer;"></i>
                        
                        </li>

                    </ul>

                    <h3 style = "cursor: pointer;">
                        
                        or use your E-mail ID
                    
                    </h3>

                </div>

                    <form action="">

                        <input type="text" placeholder="EMAIL" required>

                        <input type="password" placeholder="PASSWORD" required>

                        <button id="b">
                            
                            <a href="#" style = "cursor: pointer;">
                                
                                Forgot password?
                            
                            </a>
                        
                        </button>

                        <button type="submit" class = 'sign_in_btn'>

                            <a href = 'Home Page HTML.html' style = 'color: white;'>
                            
                                SIGN IN

                            </a>
                        
                        </button>

                    </form>

                </div>

            </div>

            <div class="sec show" id="two">

                <div class="textbox slide-left">

                <h1>
                    
                    Not a member?
                
                </h1>

                <p>
                    
                    Sign up and start shopping.
                
                </p>

                <button id="b1" style = "cursor: pointer;" class = 'prompt_sign_up'>
                    
                    SIGN UP
                
                </button>

                </div>

            </div>

        </section>
        
        <section>

            <div class="sec hide" id="three">

                <div class="textbox slide-left">

                    <h1>
                        
                        Already a member?
                    
                    </h1>

                <p>
                    
                    Login to keep shopping.
                
                </p>

                <button id="b2" style = "cursor: pointer;" class = 'prompt_sign_in'>
                    
                    SIGN IN
                
                </button>

                </div>

            </div>

            <div class="login hide" id="four">

                <div class="textbox slide-right">

                <div class="head">

                    <h1>
                        
                        Create Account 
                    
                    </h1>

                    <ul>

                        <li>
                            
                            <i class="fab fa-facebook-f" style = "cursor: pointer;"></i>
                        
                        </li>

                        <li>
                            
                            <i class="fab fa-google-plus-g" style = "cursor: pointer;"></i>
                        
                        </li>

                        <li>
                            
                            <i class="fab fa-linkedin-in" style = "cursor: pointer;"></i>
                        
                        </li>

                    </ul>

                    <h3 style = "cursor: pointer;">
                        
                        or use your E-mail ID
                    
                    </h3>

                    </div>

                    <form action="">

                        <input type="text" placeholder="NAME" required>
                        
                        <br>

                        <input type="text" placeholder="EMAIL" required>
                        
                        <br>

                        <input type="password" placeholder="PASSWORD" required>

                        <br>

                        <input type="text" placeholder="PHONE NO. (optional)">

                        <br>

                        <button type="submit" style = "cursor: pointer;" class = 'sign_up_btn'>

                            <a href = 'Home Page HTML.html' style = "color: white; text-decoration: none;">
                            
                            SIGN UP

                            </a>
                        
                        </button>

                    </form>

                </div>

            </div>

        </section>

        </section>

        
    <script src="Login And Registration JS.js"></script>

    </body>

</html>
