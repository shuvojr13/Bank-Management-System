<!doctype html>
<html lang="en">

<head>
    <title>Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="detail.css">

    <link rel=" stylesheet " href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
</head>

<body>
    <header>
        <h2> IT Bank </h2>
        <ul class="nav ">
            <li><a href="#home">Home</a></li>
            <li><a href="about_us.php" target="_blank">About Us</a></li>
            <li>
                <a href="transfer_money.php" target="_blank">Transfer Money</a>
            </li>
            <li class="d1 ">
                <a href="javascript:void(0) " class="btn">Bank Info</a>
                <div class="d-c ">
                    <a href="border_of_directors.php" target="_blank">Board Of Directors</a>
                    <a href="branch.php" target="_blank">Branch List</a>
                    <a href="services.php"  target="_blank">Services</a>
                </div>
            </li>
            <li class="d1 ">
                <a href="javascript:void(0) " class="btn ">Account Info</a>
                <div class="d-c ">
                    <a href="acc_balance.php" target="_blank">Account Balance</a>
                    <a href="acc_details.php" target="_blank">Account Details</a>
                    <a href="transection.php" target="_blank">Transaction History</a>
                </div>
            </li>
            <li class="d1 ">
                <a href="javascript:void(0) " class="btn ">Register</a>
                <div class="d-c ">
                    <a href="create_account.php" target="_blank">Create Account</a>
                    <a href="cash_in.php" target="_blank">Cash In</a>
                    <a href="cash_out.php" target="_blank">Cash Out</a>
                </div>
            </li>
            <div class="call">
                <p>Call 16999</p>
            </div>
            
        </ul>
    </header>
  
    <div class="ghead">
        <h4> Gallery </h4>
    </div>
    <div class="galary ">
        <div class="slideshow-container ">

            <div class="mySlides fade ">
                <div class="numbertext ">1 / 3</div>
                <img src="https://images.unsplash.com/photo-1518458028785-8fbcd101ebb9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzl8fGJhbmtpbmclMjBnYWxhcnl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60 " style="width:100% ">
                <div class="text ">Caption One</div>
            </div>

            <div class="mySlides fade ">
                <div class="numbertext ">2 / 3</div>
                <img src="https://images.unsplash.com/photo-1614029951470-ef9eb9952be7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjN8fGJhbmtpbmclMjBnYWxhcnl8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60 " style="width:100% ">
                <div class="text ">Caption Two</div>
            </div>

            <div class="mySlides fade ">
                <div class="numbertext ">3 / 3</div>
                <img src="https://images.unsplash.com/photo-1569098434720-175787d48d0a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTIwfHxiYW5raW5nJTIwZ2FsYXJ5fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60 " style="width:100% ">
                <div class="text ">Caption Three</div>
            </div>

            <a class="prev " onclick="plusSlides(-1) ">&#10094;</a>
            <a class="next " onclick="plusSlides(1) ">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center ">
            <span class="dot " onclick="currentSlide(1) "></span>
            <span class="dot " onclick="currentSlide(2) "></span>
            <span class="dot " onclick="currentSlide(3) "></span>
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides ");
                var dots = document.getElementsByClassName("dot ");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none ";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active ", " ");
                }
                slides[slideIndex - 1].style.display = "block ";
                dots[slideIndex - 1].className += " active ";
            }
        </script>
    </div>
    <div>
    <details class= "details">
        <summary>Events</summary>
        <div class="li">
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        </div>
        
    </details>
    
    </div >
    <div class="no2">
    <details class= "details">
        <summary>Notice Board</summary>
        <div class="li">
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        
        </div>
        
    </details>
    
    </div>
    <div class="no3">
    <details class= "details">
        <summary>Covid-19</summary>
        <div class="pre">
            <h5>Stay Home ,Stay Safe</h5>
        <pre>
        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 
        1500s, when an unknown printer took a galley of type and scrambled it to
        make a type specimen book. 
        </pre>
        </div>
        
    </details>
    
    </div>
    <div class="no4">
    <details class= "details">
        <summary>Circular</summary>
        <div class="li">
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li><br/>
        
        </div>
        
    </details>
    
    </div>
    <br/>
    <div class="content">
        <h3>Welcome to our official site</h3>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
            with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
    </div>
    <br/>
    
    <hr/>
    <footer class="footer">
        <div class="row">
            <div class="contactus">
                <h3>Contact Us</h3>
                <p><strong>Mobile:</strong>8801700000000</p>
                <p><strong>E-mail: </strong>bankname@gmail.com</p>
            </div>
            <div class="terms">
                <h4>Terms and Condition</h4>
                <div class="psg">
                    <p> Lorem Ipsum is simply  text</p>
                    <p> Lorem Ipsum is simply  text</p>
                    <p> Lorem Ipsum is simply  text</p>
                    <p> Lorem Ipsum is simply  text</p>
                </div>
            </div>
                
            </div>
        </div>
        <hr/>
        <div class="linkweb">
            <p>www.bankname.com</p>
        </div>
    </footer>
    <hr/>
</body>

</html>