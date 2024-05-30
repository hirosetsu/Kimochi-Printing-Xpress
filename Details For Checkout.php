<!DOCTYPE html>

<html>

    <head>

        <meta http-equiv="contact-type" content="text/html; charset-utf-8"/>

        <meta name="viewport" content="width-device-width,initial-scale=1,mininmum-scale=1,maximum-scale=1,user-scalable=no">

        <title>
            
            Details for Delivery
        
        </title>

        <link href="css/Details For Checkout CSS.css" rel="stylesheet" type="text/css" />
        
        <link rel="shortcut icon" type="image/jpg" href="C:\Users\hp\Desktop\College\First Semester\Introduction To Web Technologies\Notepad ++ Files\Project\favicon.ico"/>

        <script src="Details For Checkout JS.js"></script>

    
    </head>

    <body>

        <div class="contact-in">

            <div class="contact-map">

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3635.265747520248!2d125.67768029316343!3d7.306467127526429!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f945b499ddb53f%3A0xef8e9afa23de6261!2sArguelles%20St%2C%20Panabo%2C%20Davao%20del%20Norte!5e0!3m2!1sen!2sph!4v1716564882911!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

            <div class="contact-form">

                <h1 align = 'center'>
                    
                    Details For Delivery
                
                </h1>

                <div id="error_message"></div>

                <form class = 'address_form' onsubmit="return validate_form();">

                    <input type="text" placeholder="Name" class="contact-form-txt" id = 'name' required/>

                    <input type="text" placeholder="Address" class="contact-form-txt" id = 'address' required/>

                    <input type="text" placeholder="Email-ID" class="contact-form-txt" id = 'email' required/>

                    <input type="text" placeholder="Locality/Apartment" class="contact-form-txt" required/>

                    <input type="text" placeholder="Pincode" class="contact-form-txt" id = 'pincode' required/>

                    <input type="text" placeholder="Contact No." class="contact-form-txt" id = 'phone' required/>

                    <input type="text" placeholder="Date (Format: dd/mm/yyyy)" class="contact-form-txt" id = 'date' required/>

                    <input type="text" placeholder="Time Slot (Format: Starting Time - Ending Time. Give a duration of 2 hours.)" class="contact-form-txt" id = 'time' required/>

                    <button type="submit" class="contact-form-btn" id = 'submit'>

                        <a href = 'Payment HTML.html' style = "cursor: pointer; text-decoration: none; color: white;">
                            
                            Submit
        
                        </a>
                    
                    </button>
                </form>

            </div>

        </div>

    </body>

</html>
